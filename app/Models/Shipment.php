<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Shipment extends Model
{
    use HasFactory;

    /**
     * Generate a unique tracking number.
     *
     * @return string
     */
    public static function generateTrackingNumber(): string
    {
        // Get the first three letters of the app name
        $appNameUpper = Str::upper(config('app.name'));
        $appInitials = Str::limit($appNameUpper, 3, '');
        $lastLetter = Str::substr($appNameUpper, -1);
        $randomNumber = Str::upper(Str::random(10));

        return $appInitials . $randomNumber . $lastLetter;
    }

    public static function trackingNumberValidationRegex(): string
    {
        // Get the first three letters of the app name
        $appNameUpper = Str::upper(config('app.name'));
        $appInitials = Str::limit($appNameUpper, 3, '');
        $lastLetter = Str::substr($appNameUpper, -1);

        // Return a regex pattern that matches the tracking number format
        return '/^' . $appInitials . '[A-Z0-9]{10}' . $lastLetter . '$/';
    }

    /**
     * Get the statuses of the shipment.
     */
    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}
