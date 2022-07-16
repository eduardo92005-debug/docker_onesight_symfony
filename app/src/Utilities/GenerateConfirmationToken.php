<?php

namespace App\Utilities;

class GenerateConfirmationToken {

    /*
    *A class to generate a token for the event confirmation.
    */
    public function tokenize(): string
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }
}
