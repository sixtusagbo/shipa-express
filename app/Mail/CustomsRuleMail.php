<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomsRuleMail extends Mailable
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
        return new Envelope(
            subject: 'Regarding [' . $this->config['tracking_number'] . ']',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $date = Carbon::createFromDate($this->config['date']);

        return new Content(
            view: 'view.name',
            with: [
                'recipient_name' => $this->config['recipient_name'],
                'country1' => $this->config['country1'],
                'country2' => $this->config['country2'],
                'date1' => $date->toFormattedDateString(),
                'date2' => $date->toDateString(),
                'above_weight' => $this->config['above_weight'],
                'custom_duty_fee' => $this->config['custom_duty_fee'],
                'stamp_duty_fee' => $this->config['stamp_duty_fee'],
                'total' => $this->config['total'],
                'agent_name' => $this->config['agent_name'],
                'tracking_number' => $this->config['tracking_number'],
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
