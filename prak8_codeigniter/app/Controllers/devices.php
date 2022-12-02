<?php

namespace App\Controllers;


class devices extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Devices',
            'device' => [
                [
                    'Devices_Name' => 'Arduino',
                    'Merk' => 'Genuiono',
                    'jumlah' => '12',
                    'status' => '1'
                ],
                [
                    'Devices_Name' => 'Proyektor',
                    'Merk' => 'danone',
                    'jumlah' => '1',
                    'status' => '1'
                ],
                [
                    'Devices_Name' => 'Komputer',
                    'Merk' => 'sumsang',
                    'jumlah' => '11',
                    'status' => '1'
                ]
            ]
            
        ];
        return view('pages/devices', $data);
    }
}