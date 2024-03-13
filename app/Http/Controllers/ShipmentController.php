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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shipment $shipment)
    {
        //
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
}
