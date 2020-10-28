<?php

namespace App\Services;

use App\Contact;


class ContactService
{

    public static function findByName($name): ?Contact
    {
        /**
         * this will replace the database for testing purposes only
         */
        $data = [];
        array_push($data, new Contact("alfredo", "sotil", "962398589", "alfredosotil@gmail.com"));
        array_push($data, new Contact("rachel", "montoya", "940185345", "rachelmontoya@gmail.com"));
        array_push($data, new Contact("nathan", "leandro", "962398588", "nathanleandro@gmail.com"));

        /** @var Contact $value */
        foreach ($data as $value) {
            if (strcmp($name, $value->getName()) == 0) {
                return $value;
            }
        }
        return null;
    }

    public static function validateNumber(string $number): bool
    {
        return preg_match("/^([8-9])([1-9])(\d{2})(-?|\040?)(\d{4})$/", $number);
    }
}