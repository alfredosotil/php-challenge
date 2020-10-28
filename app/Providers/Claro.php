<?php


namespace App\Providers;


use App\Call;
use App\Contact;
use App\Interfaces\CarrierInterface;

abstract class Claro implements CarrierInterface
{
    public function dialContact(Contact $contact)
    {
        printf("dialing to: " . $contact->getPhoneNumber());
    }

    public function makeCall(): Call
    {
        printf("returning call.....");
        return new Call();
    }
}