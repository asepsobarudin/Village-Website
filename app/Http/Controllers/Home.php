<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'menu' => [
                'dropProfile' => [
                    ['title' => 'Informasi Desa', 'link' => 'informasi_desa'],
                    ['title' => 'Sejarah Desa', 'link' => 'sejarah_desa'],
                    ['title' => 'Visi dan Misi', 'link' => 'visi_misi'],
                    ['title' => 'Struktur Organisasi', 'link' => 'struktur_organisasi'],
                    ['title' => 'Geografis Desa', 'link' => 'geografis_desa']
                ],
                'dropLayanan' => [
                    ['title' => 'Pembuatan KTP', 'link' => 'ktp'],
                    ['title' => 'Pembuatan Kartu Keluarga (KK)', 'link' => 'kk'],
                    ['title' => 'Keluhan Masyarakat', 'link' => 'keluhan_masyarakat']
                ],
            ],
            'slideshow' => [
                [
                    'title' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, voluptatum!',
                    'image' => 'https://source.unsplash.com/random/?cat',
                    'link' => '#slide1'
                ],
                [
                    'title' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, voluptatum!',
                    'image' => 'https://source.unsplash.com/random/?dog',
                    'link' => '#slide2'
                ],
                [
                    'title' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, voluptatum!',
                    'image' => 'https://source.unsplash.com/random/?city',
                    'link' => '#slide3'
                ]
            ],
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

        return view('pages.home', $data);
    }
}
