<?php
function encryptData($data, $key) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

function decryptData($data, $key) {
    list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2), 2, null);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
}

function hashData($data) {
    return hash('sha256', $data);
}

function generateTOTP($secret) {
    // Implement TOTP generation using a library like PHPGangsta/GoogleAuthenticator
}
?>
