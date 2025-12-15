<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IpController extends Controller
{
    public function saveipaddress($ipaddress)
    {
        if (empty($ipaddress)) {
            return response()->json([
                'success' => false,
                'data' => $ipaddress
            ]);
        } else {
            DB::table('ipaddress')->insert([
                'ip_address' => $ipaddress
            ]);

           DB::table('users')->where('id',2)->update([
                'ip_address' => $ipaddress
            ]);

          
            return response()->json([
                'success' => true,
                'data' => $ipaddress
            ]);
        }
    }
}