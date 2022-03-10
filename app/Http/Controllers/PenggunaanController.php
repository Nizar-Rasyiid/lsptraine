<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penggunaan;

class PenggunaanController extends Controller
{
    public function getPenggunaan()
    {
        $data = Penggunaan::get();
        if ($data) {
            $response = [
                'message' => 'Show Penggunaan',
                'Penggunaan'      => $data,
            ];

            return response()->json($response, 200);
        }
        $response = [
            'message'       => 'An error Occured'
        ];
    }
}
