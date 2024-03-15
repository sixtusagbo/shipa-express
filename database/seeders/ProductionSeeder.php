<?php

namespace Database\Seeders;

use App\Models\Shipment;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shipment1 = Shipment::factory([
            'recipient_email' => 'sixtusagbo211@gmail.com',
        ])->create();

        // Seed statuses for shipment1
        $statuses = [
            [
                'shipment_id' => $shipment1->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Delivered',
                'remarks' => 'Parcel delivered [Collected]and Received by [Sixtus Miracle]; Collection site is [AWKA-UNITY]',
                'created_at' => '2024-03-05 22:03:14',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Departed',
                'remarks' => '[Isaiah Nicholas]in [AWKA-UNITY]scanned for delivery; The delivery courier is [Isaiah Nicholas][08137798649]',
                'created_at' => '2024-03-04 10:09:20',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'On Hold',
                'remarks' => 'Issue Parcel Reason[Recipient\'S Phone Cannot Be Reached]',
                'created_at' => '2024-03-04 15:14:30',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Departed',
                'remarks' => '[Isaiah Nicholas]in [AWKA-UNITY]scanned for delivery; The delivery courier is [Isaiah Nicholas][08137798649]',
                'created_at' => '2024-03-02 09:31:59',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'On Hold',
                'remarks' => 'Issue Parcel Reason[Recipient\'S Phone Cannot Be Reached]',
                'created_at' => '2024-03-02 18:52:20',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Departed',
                'remarks' => '[Ifeanyi Nweze]in [AWKA-UNITY]scanned for delivery; The delivery courier is [Isaiah Nicholas][08137798649]',
                'created_at' => '2024-03-01 12:13:56',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'On Hold',
                'remarks' => 'Issue Parcel Reason[Recipient\'S Phone Cannot Be Reached]',
                'created_at' => '2024-03-01 19:47:38',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Arrived',
                'remarks' => 'Arrived at [AWKA-UNITY]; Last Site is [DC-ASB]',
                'created_at' => '2024-03-01 10:44:30',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'DC-ASB',
                'stage' => 'Departed',
                'remarks' => 'Loaded at [DC-ASB]; Departed for [AWKA-UNITY]',
                'created_at' => '2024-02-29 15:04:44',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'DC-ASB',
                'stage' => 'Loaded',
                'remarks' => 'Loaded at [DC-ASB]; Departed for [Delta-Asaba site]',
                'created_at' => '2024-02-29 11:04:18',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'DC-ASB',
                'stage' => 'Arrived',
                'remarks' => 'Arrived at [DC-ASB]; Last Site is [LOS-INT]',
                'created_at' => '2024-02-29 09:30:59',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'LOS-INT',
                'stage' => 'Departed',
                'remarks' => 'Loaded at [LOS-INT]; Departed for [DC-ASB]',
                'created_at' => '2024-02-29 09:30:57',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'LOS-INT',
                'stage' => 'Received',
                'remarks' => 'Received in [LOS-INT]，Pick-Up Courier is[EJEMBI PETER. A]',
                'created_at' => '2024-02-29 09:30:55',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'Nigeria',
                'stage' => 'Arrived',
                'remarks' => 'Arrived at DC Warehouse',
                'created_at' => '2024-02-27 02:45:21',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'Nigeria',
                'stage' => 'Clearance',
                'remarks' => 'Customs Clearance Completed',
                'created_at' => '2024-02-27 02:15:21',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => null,
                'stage' => 'Clearance',
                'remarks' => 'Customs clearance in progress',
                'created_at' => '2024-02-21 16:51:00',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => null,
                'stage' => 'In Transit',
                'remarks' => 'Cargo flight arrived',
                'created_at' => '2024-02-21 15:51:00',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => null,
                'stage' => 'In Transit',
                'remarks' => 'Cargo flight departured',
                'created_at' => '2024-02-19 22:50:00',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => null,
                'stage' => 'Clearance',
                'remarks' => 'clearance in progress',
                'created_at' => '2024-02-18 08:54:36',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'Guangzhou warehouse',
                'stage' => 'Processing',
                'remarks' => 'processing, order has been outbounded',
                'created_at' => '2024-02-18 07:54:36',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => null,
                'stage' => 'In Transit',
                'remarks' => 'Arrived at airport',
                'created_at' => '2024-02-17 23:00:00',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'Guangzhou warehouse',
                'stage' => 'Processing',
                'remarks' => 'processing assembling operation',
                'created_at' => '2024-02-17 05:33:57',
            ],
            [
                'shipment_id' => $shipment1->id,
                'location' => 'Guangzhou warehouse',
                'stage' => 'Processing',
                'remarks' => 'Order received and processing started',
                'created_at' => '2024-02-16 14:12:34',
            ],
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }

        $shipment2 = Shipment::factory([
            'recipient_email' => 'sixtusagbo211@gmail.com',
        ])->create();

        // Seed statuses for shipment2
        $statusesWithIcons = [
            [
                'shipment_id' => $shipment2->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Delivered',
                'remarks' => 'Parcel delivered [Collected]and Received by [Sixtus Miracle]; Collection site is [AWKA-UNITY]',
                'created_at' => '2024-03-05 22:03:14',
                'icon_id' => 1,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Departed',
                'remarks' => '[Isaiah Nicholas]in [AWKA-UNITY]scanned for delivery; The delivery courier is [Isaiah Nicholas][08137798649]',
                'created_at' => '2024-03-04 10:09:20',
                'icon_id' => 2,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'On Hold',
                'remarks' => 'Issue Parcel Reason[Recipient\'S Phone Cannot Be Reached]',
                'created_at' => '2024-03-04 15:14:30',
                'icon_id' => 3,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Departed',
                'remarks' => '[Isaiah Nicholas]in [AWKA-UNITY]scanned for delivery; The delivery courier is [Isaiah Nicholas][08137798649]',
                'created_at' => '2024-03-02 09:31:59',
                'icon_id' => 2,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'On Hold',
                'remarks' => 'Issue Parcel Reason[Recipient\'S Phone Cannot Be Reached]',
                'created_at' => '2024-03-02 18:52:20',
                'icon_id' => 3,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Departed',
                'remarks' => '[Ifeanyi Nweze]in [AWKA-UNITY]scanned for delivery; The delivery courier is [Isaiah Nicholas][08137798649]',
                'created_at' => '2024-03-01 12:13:56',
                'icon_id' => 2,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'On Hold',
                'remarks' => 'Issue Parcel Reason[Recipient\'S Phone Cannot Be Reached]',
                'created_at' => '2024-03-01 19:47:38',
                'icon_id' => 3,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'AWKA-UNITY',
                'stage' => 'Arrived',
                'remarks' => 'Arrived at [AWKA-UNITY]; Last Site is [DC-ASB]',
                'created_at' => '2024-03-01 10:44:30',
                'icon_id' => 4,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'DC-ASB',
                'stage' => 'Departed',
                'remarks' => 'Loaded at [DC-ASB]; Departed for [AWKA-UNITY]',
                'created_at' => '2024-02-29 15:04:44',
                'icon_id' => 5,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'DC-ASB',
                'stage' => 'Loaded',
                'remarks' => 'Loaded at [DC-ASB]; Departed for [Delta-Asaba site]',
                'created_at' => '2024-02-29 11:04:18',
                'icon_id' => 5,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'DC-ASB',
                'stage' => 'Arrived',
                'remarks' => 'Arrived at [DC-ASB]; Last Site is [LOS-INT]',
                'created_at' => '2024-02-29 09:30:59',
                'icon_id' => 4,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'LOS-INT',
                'stage' => 'Departed',
                'remarks' => 'Loaded at [LOS-INT]; Departed for [DC-ASB]',
                'created_at' => '2024-02-29 09:30:57',
                'icon_id' => 5,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'LOS-INT',
                'stage' => 'Received',
                'remarks' => 'Received in [LOS-INT]，Pick-Up Courier is[EJEMBI PETER. A]',
                'created_at' => '2024-02-29 09:30:55',
                'icon_id' => 6,
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'Nigeria',
                'stage' => 'Arrived',
                'remarks' => 'Arrived at DC Warehouse',
                'created_at' => '2024-02-27 02:45:21',
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'Nigeria',
                'stage' => 'Clearance',
                'remarks' => 'Customs Clearance Completed',
                'created_at' => '2024-02-27 02:15:21',
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => null,
                'stage' => 'Clearance',
                'remarks' => 'Customs clearance in progress',
                'created_at' => '2024-02-21 16:51:00',
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => null,
                'stage' => 'In Transit',
                'remarks' => 'Cargo flight arrived',
                'created_at' => '2024-02-21 15:51:00',
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => null,
                'stage' => 'In Transit',
                'remarks' => 'Cargo flight departured',
                'created_at' => '2024-02-19 22:50:00',
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => null,
                'stage' => 'Clearance',
                'remarks' => 'clearance in progress',
                'created_at' => '2024-02-18 08:54:36',
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'Guangzhou warehouse',
                'stage' => 'Processing',
                'remarks' => 'processing, order has been outbounded',
                'created_at' => '2024-02-18 07:54:36',
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => null,
                'stage' => 'In Transit',
                'remarks' => 'Arrived at airport',
                'created_at' => '2024-02-17 23:00:00',
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'Guangzhou warehouse',
                'stage' => 'Processing',
                'remarks' => 'processing assembling operation',
                'created_at' => '2024-02-17 05:33:57',
            ],
            [
                'shipment_id' => $shipment2->id,
                'location' => 'Guangzhou warehouse',
                'stage' => 'Processing',
                'remarks' => 'Order received and processing started',
                'created_at' => '2024-02-16 14:12:34',
            ],
        ];

        foreach ($statusesWithIcons as $status) {
            Status::create($status);
        }
    }
}
