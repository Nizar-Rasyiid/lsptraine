<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tagihan;

class TagihanController extends Controller
{
    public function getTagihan()
    {
        $data = Tagihan::get();
    if ($data) {
        $response = [
            'message' => 'Show Tagihan',
            'Tagihan'      => $data,
        ];

        return response()->json($response, 200);
    }
    $response = [
        'message'       => 'An error Occured'
    ];
    }
}
