<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        $data = [
            'title' => "Dashboard",
            'calendar' => [
                [
                    'tanggal' => 17,
                    'bulan' => 8,
                    'event' => "Hari Kemerdekaan Indonesia"
                ],
                [
                    'tanggal' => 23,
                    'bulan' => 8,
                    'event' => "Hari Ulang Tahun Desa Selajambe"
                ],
                [
                    'tanggal' => 25,
                    'bulan' => 12,
                    'event' => "Hari Natal"
                ]
            ]
        ];
        return view('pages.Dashboard.dashboard', $data);
    }
}
