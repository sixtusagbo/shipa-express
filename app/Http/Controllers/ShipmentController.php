<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shipment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shipment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $fields = request()->validate([
            'tracking_number' => 'required|regex:' . '/' . Shipment::trackingNumberValidationRegex() . '/',
            'shipper_name' => 'required|different:recipient_name',
            'shipper_address' => 'required|string|min:2|max:255|different:recipient_address',
            'shipper_phone' => 'nullable|different:recipient_phone',
            'origin' => 'required|different:destination',
            'recipient_name' => 'required|different:shipper_name',
            'recipient_address' => 'required|string|min:2|max:255|different:shipper_address',
            'recipient_phone' => 'nullable|different:shipper_phone',
            'destination' => 'required|different:origin',
            'type' => 'required|in:Parcel,Documents,Sentiments',
            'weight' => 'required',
            'mode' => 'required|in:Air,Road,Sea,Train',
            'customs_cost' => 'required',
            'carrier' => 'nullable|string|min:3|max:255',
            'invoice_number' => 'required',
            'pod' => 'nullable|url',
            'eta' => 'nullable',
            'booked_on' => 'required|date',
            'shipped_on' => 'nullable|date',
            'delivered_on' => 'nullable|date',
            'booked_at' => 'required|date_format:H:i',
            'shipped_at' => 'nullable|date_format:H:i',
            'delivered_at' => 'nullable|date_format:H:i',
        ]);

        $shipment = Shipment::create($fields);
        $shipment->statuses()->create([
            'stage' => 'Processing',
            'location' => $fields['origin'],
            'remarks' => 'Order has been inbounded.',
        ]);

        return redirect('/')->with('message', 'Shipment created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shipment $shipment)
    {
        return view('shipment.edit')->with('shipment', $shipment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shipment $shipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shipment $shipment)
    {
        //
    }

    /**
     * Find a shipment by tracking number.
     */
    public function find(Request $request)
    {
        // Validate the request
        $request->validate([
            'tracking_numbers' => 'required|array',
            'tracking_numbers.*' => 'required|regex:' . '/' . Shipment::trackingNumberValidationRegex() . '/',
        ]);

        // Find the shipments
        $shipments = Shipment::with(['statuses', 'statuses.icon'])
            ->whereIn('tracking_number', $request->tracking_numbers)
            ->get();
        $shipmentMap = [];

        foreach ($shipments as $shipment) {
            $shipmentMap[$shipment->tracking_number] = $shipment;
        }


        // Return the shipments as JSON
        return response()->json($shipmentMap);
    }

    /**
     * Manage shipments.
     */
    public function manage()
    {
        return view('shipment.manage')->with('shipments', Shipment::latest()->get());
    }
}
