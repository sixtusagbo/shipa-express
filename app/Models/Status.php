<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Status extends Model
{
    use HasFactory, Notifiable;


    /**
     * Get the shipment that owns the status.
     */
    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }

    /**
     * Get the icon that represents the status.
     */
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
