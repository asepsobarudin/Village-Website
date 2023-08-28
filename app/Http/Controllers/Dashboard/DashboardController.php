<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Dashboard",
            'calendar' => [
                [
                    'tanggal' => 17,
                    'bulan' => 8,
                    'event' => "Hari Kemerdekaan Indonesia",
                    'color' => "color7"
                ],
                [
                    'tanggal' => 23,
                    'bulan' => 8,
                    'event' => "Hari Ulang Tahun Desa Selajambe",
                    'color' => "color5"
                ],
                [
                    'tanggal' => 27,
                    'bulan' => 9,
                    'event' => "Maulid Nabi Muhambad SAW",
                    'color' => "color7"
                ],
                [
                    'tanggal' => 25,
                    'bulan' => 12,
                    'event' => "Hari Natal",
                    'color' => "color7"
                ],
            ]
        ];
        return view('pages.Dashboard.dashboard', $data);
    }
}
