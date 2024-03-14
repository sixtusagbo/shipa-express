<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_number', 20);
            $table->string('shipper_name');
            $table->string('shipper_address');
            $table->string('shipper_phone')->nullable();
            $table->string('origin');
            $table->string('recipient_name');
            $table->string('recipient_email');
            $table->string('recipient_address');
            $table->string('recipient_phone')->nullable();
            $table->string('destination');
            $table->enum('type', ['Parcel', 'Documents', 'Sentiments']); // Type of shipment
            $table->string('weight');
            $table->enum('mode', ['Air', 'Road', 'Sea', 'Train']); // Mode of transportation
            $table->decimal('customs_cost'); // Customs Cost
            $table->string('carrier')->nullable(); // Carrier Name
            $table->string('invoice_number', 20); // Invoice Number
            $table->string('pod')->nullable(); // Proof of Delivery (Image)
            $table->timestamp('eta')->nullable(); // Estimated Time of Arrival
            $table->date('booked_on')->default(date('Y-m-d')); // Date of booking process
            $table->date('shipped_on')->nullable(); // Date on which shipment leaves origin
            $table->date('delivered_on')->nullable(); // Date on which shipment reaches destination and gets delivered to recipient
            $table->time('booked_at')->default(now()->format('H:i:s')); // Time of Booking
            $table->time('shipped_at')->nullable(); // Time of Shipping
            $table->time('delivered_at')->nullable(); // Time of Delivery
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
