<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ParcelStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $config;

    /**
     * Create a new message instance.
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $date = Carbon::now()->format('Y-m-d');
        return new Envelope(
            subject: 'Parcel Status Notification [' . $date . ']',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.parcel-status',
            with: [
                'name' => $this->config['name'],
                'waybill_number' => $this->config['tracking_number'],
                'origin' => $this->config['from'],
                'status' => $this->config['stage'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
