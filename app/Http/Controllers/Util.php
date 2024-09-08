<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Util extends Controller
{
    public static function getJsonFile(string $asset): array
    {
        $jsonString = file_get_contents($asset);
        if ($jsonString === false) {
            throw new \Exception('Erro ao ler o arquivo: ' . $asset);
        }

        $data = json_decode($jsonString, true);

        if (json_last_error() === JSON_ERROR_NONE) {
            return $data;
        } else {
            throw new \Exception('Erro arquivo decodificado não é do tipo JSON: ' . json_last_error_msg());
        }
    }
}
