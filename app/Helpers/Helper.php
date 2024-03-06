<?php

namespace App\Helpers;
class Helper
{
    /**
     * @param int $length
     * @return string
     */
    public static function generateUrlToken(int $length = 8): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $token = '';
        for ($i = 0; $i < $length; $i++) {
            $token .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $token;
    }

    /**
     * @param string $date
     * @return string
     */
    public static function dateTimeFormat(string $date): string
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }
}
