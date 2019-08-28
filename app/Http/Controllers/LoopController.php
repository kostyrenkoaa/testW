<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    private $data = [
        [
            'img' => 'device.svg',
            'title' => 'Mobile',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, quasi.',
            'price' => '10',
        ],
        [
            'img' => 'laptop.svg',
            'title' => 'desktop',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eum excepturi, exercitationem facilis laboriosam libero!',
            'price' => '15',
        ],
        [
            'img' => 'monitor.svg',
            'title' => 'tv',
            'info' => 'Lorem ipsum dolor sit amet.',
            'price' => '20',
        ],
    ];

    public function showPage()
    {
        $params = [
            'title' => "Страница вывода тестового задания",
            'data' => json_encode($this->data)
        ];

        return view('loop', $params);
    }

    public function getData($id)
    {
        $result = [];
        if (isset($this->data[$id])) {
            $result = $this->data[$id];
        }

        return response()->json($result);
    }
}
