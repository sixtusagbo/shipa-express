<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CollectionNoticeMail extends Mailable
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
            subject: $this->config['tracking_number'] . ' Collection Notice',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.collection-notice',
            with: [
                'name' => $this->config['name'],
                'content' => $this->config['content'],
                'origin' => $this->config['from'],
                'collected_on' => $this->config['collected_on'],
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
