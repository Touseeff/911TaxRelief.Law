<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OldRecordsTaxRegistryMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $userName;
    public $updatedValues;
    public $email;
    public $phone_number;
    public $comments;
    public $check_box;
    public $record;
    public $url_pin_number;

    public $address_two;

    public function __construct($userName, $updatedValues, $email, $phone_number, $comments, $check_box, $record, $url_pin_number, $address_two)
    {
        $this->userName = $userName;
        $this->updatedValues = $updatedValues;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->comments = $comments;
        $this->check_box = $check_box;
        $this->record = $record;
        $this->url_pin_number = $url_pin_number;
        $this->address_two = $address_two;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            // subject: "911TaxRelief.Law - Tax Records [{$this->url_pin_number}]",
            subject: "911TaxRelief.Law - Tax Records [{$this->url_pin_number}]",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'Mails.old_records_tax_registry_mail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
