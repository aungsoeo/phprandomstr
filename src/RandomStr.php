<?php
namespace ASO\App;

class RandomStr {
    public function generateRandomPassword($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        $characterCount = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $index = mt_rand(0, $characterCount);
            $password .= $characters[$index];
        }

        return $password;
    }
}