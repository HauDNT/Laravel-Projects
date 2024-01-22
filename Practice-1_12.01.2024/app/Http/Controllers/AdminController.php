<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // CUD donvido:
    public function insert_donvido($ten_don_vi)
    {
        DB::table("donvido")->insert(
            [
                'ten_don_vi' => $ten_don_vi
            ]
        );
    }

    public function update_donvido($ma_don_vi, $ten_don_vi)
    {
        DB::table('donvido')
        ->where('id', $ma_don_vi)
        ->update([
            'ten_don_vi' => $ten_don_vi
        ]);
    }

    public function delete_donvido($ma_don_vi)
    {
        DB::table('donvido')
        ->where('id', $ma_don_vi)
        ->delete();
    }

    // CUD cambien:
    public function insert_cambien($ten_cam_bien)
    {
        DB::table("cambien")->insert(
            [
                'ten_cam_bien' => $ten_cam_bien
            ]
        );
    }

    public function update_cambien($ma_cam_bien, $ten_cam_bien)
    {
        DB::table('cambien')
        ->where('id', $ma_cam_bien)
        ->update([
            'ten_cam_bien' => $ten_cam_bien
        ]);
    }

    public function delete_cambien($ma_cam_bien)
    {
        DB::table('cambien')
        ->where('id', $ma_cam_bien)
        ->delete();
    }
}
