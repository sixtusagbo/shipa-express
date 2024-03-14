<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Shipment;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StatusController extends Controller
{
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
            'stage' => ['required', Rule::in(['Processing', 'Arrived', 'Departed', 'In Transit', 'Delivered', 'Returned', 'Cancelled'])],
            'location' => 'nullable',
            'remarks' => 'required|string|max:255',
            'icon_id' => 'nullable',
        ]);

        Status::create($fields);
        $id = $fields['shipment_id'];
        $route = "/shipments/$id/statuses";

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
            'stage' => ['required', Rule::in(['Processing', 'Arrived', 'Departed', 'In Transit', 'Delivered', 'Returned', 'Cancelled'])],
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
}
