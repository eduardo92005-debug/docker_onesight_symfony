<?php

namespace App\Utilities;

class GenerateConfirmationToken {
    
    public function tokenize(): string
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }
}
