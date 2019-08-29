<?php

namespace App\Http\Controllers;

use \Illuminate\Http\JsonResponse;

class LoopController extends Controller
{
    /**
     * @var array Данные для вывода информации
     */
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

    /**
     * Action для вывода страницы
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPage()
    {
        $params = [
            'title' => "Первое задание",
            'data' => json_encode($this->data)
        ];

        return view('loop', $params);
    }

    /**
     * Action для получения данных по id
     *
     * @param $id
     * @return JsonResponse
     */
    public function getData($id): JsonResponse
    {
        $result = [];
        if (isset($this->data[$id])) {
            $result = $this->data[$id];
        }

        return response()->json($result);
    }
}
