<?php

namespace App\Http\Controllers;

use App\Mail\CollectionNoticeMail;
use App\Mail\CustomsRuleMail;
use App\Mail\ParcelStatusMail;
use App\Models\Icon;
use App\Models\Shipment;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class StatusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('restrict.demo')->only(['store', 'update', 'destroy']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Shipment $shipment)
    {
        $data = [
            'icons' => Icon::all(),
            'shipment_id' => $shipment->id,
            'tracking_number' => $shipment->tracking_number,
        ];
        return view('status.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $fields = request()->validate([
            'shipment_id' => 'required|exists:shipments,id',
            'stage' => ['required', Rule::in(config('meta.status.stages'))],
            'location' => 'nullable',
            'remarks' => 'required|string|max:255',
            'icon_id' => 'nullable',
        ]);

        $status = Status::create($fields);
        $id = $fields['shipment_id'];
        $route = "/shipments/$id/statuses";

        $config = [
            'name' => $status->shipment->recipient_name,
            'tracking_number' => $status->shipment->tracking_number,
            'from' => $status->shipment->origin,
            'stage' => $status->stage,
        ];
        if ($status->stage == 'Delivered') {
            $delivered_on = $status->shipment->delivered_on;
            $delivered_at = $status->shipment->delivered_at;
            $config['collected_on'] = Carbon::createFromTimestamp($delivered_on . $delivered_at);
        }
        $mailable = $status->stage == 'Delivered' ? new CollectionNoticeMail($config) : new ParcelStatusMail($config);
        $email = $status->shipment->recipient_email;
        Mail::to($email)->send($mailable);
        // return $mailable; //? Testing purposes

        return redirect($route)->with('message', 'Status created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        $data = [
            'icons' => Icon::all(),
            'status' => $status,
        ];

        return view('status.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Status $status)
    {
        $fields = request()->validate([
            'shipment_id' => 'required',
            'stage' => ['required', Rule::in(config('meta.status.stages'))],
            'location' => 'nullable',
            'remarks' => 'required|string|max:255',
            'icon_id' => 'nullable',
        ]);

        $status->update($fields);
        $id = $fields['shipment_id'];
        $route = "/shipments/$id/statuses";

        return redirect($route)->with('message', 'Status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        $id = $status->shipment->id;
        $route = "/shipments/$id/statuses";

        $status->delete();

        return redirect($route)->with('message', 'Status removed successfully!');
    }

    /**
     * Show the form for creating a new customs resource.
     */
    public function customs(Shipment $shipment)
    {
        $data = [
            'icons' => Icon::all(),
            'shipment_id' => $shipment->id,
            'tracking_number' => $shipment->tracking_number,
        ];

        return view('status.customs')->with($data);
    }

    /**
     * Store customs resource.
     */
    public function customs_status(Shipment $shipment)
    {
        $fields = request()->validate([
            'shipment_id' => 'required|exists:shipments,id',
            'stage' => ['required', Rule::in(config('meta.status.stages'))],
            'location' => 'nullable',
            'remarks' => 'required|string|max:255',
            'icon_id' => 'nullable',
            'country1' => 'required',
            'country2' => 'required',
            'date' => 'required',
            'weight' => 'required',
            'customs_fee' => 'required',
            'stamp_fee' => 'required',
            'total' => 'required',
            'agent_name' => 'required',
        ]);

        $status = Status::create([
            'shipment_id' => $fields['shipment_id'],
            'stage' => $fields['stage'],
            'location' => $fields['location'],
            'remarks' => $fields['remarks'],
            'icon_id' => $fields['icon_id'],
        ]);
        $id = $fields['shipment_id'];
        $route = "/shipments/$id/statuses";

        $config = [
            'recipient_name' => $status->shipment->recipient_name,
            'country1' => $fields['country1'],
            'country2' => $fields['country2'],
            'date' => $fields['date'],
            'above_weight' => $fields['weight'],
            'custom_duty_fee' => $fields['customs_fee'],
            'stamp_duty_fee' => $fields['stamp_fee'],
            'total' => $fields['total'],
            'agent_name' => $fields['agent_name'],
            'tracking_number' => $status->shipment->tracking_number,
        ];
        $mailable = new CustomsRuleMail($config);
        $email = $status->shipment->recipient_email;
        Mail::to($email)->send($mailable);
        // return $mailable; //? Testing purposes

        return redirect($route)->with('message', 'Customs mail dispatched successfully!');
    }
}
