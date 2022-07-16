<?php

namespace App\Utilities;

class AuthConfirmationToken {
    /*
    *A class to authenticate a received token.
    */
    public function authentication(string $token): bool
    {
        $token_decoded = base64_decode($token);
        $token_decoded = strtr($token_decoded, '-_', '+/');
        $token_decoded = rtrim($token_decoded, '=');
        $token_decoded = base64_decode($token_decoded);
        $token_decoded = unserialize($token_decoded);
        $token_decoded = $token_decoded['token'];
        if($token_decoded == $token) {
            return true;
        }
    }
}
