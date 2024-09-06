<?php

namespace App\Mail;

use App\Models\Services;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ServiceConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(protected Services $service)
    {
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Service Confirmed',
            tags: ['Service Confirmation'],
            metadata: [
                'service_id' => $this->service->id,
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.serviceConfirmed',
            with: [
                'name' => $this->service->name,
                'phone'=>$this->service->phone,
                'service_type'=>$this->service->service_type,
                'pickup_street_address'=>$this->service->pickup_street_address,
                'pickup_city'=>$this->service->pickup_city,
                'dropoff_street_address' =>$this->service->dropoff_street_address,
                'dropoff_city'=>$this->service->dropoff_city,
                'date'=>$this->service->date,
                'time'=>$this->service->time,
                'weight_desc'=>$this->service->weight_desc,
            ],
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
