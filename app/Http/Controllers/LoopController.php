<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    public function showPage()
    {
        $params = [
            'title' => "Страница вывода тестового задания"
        ];

        return view('loop', $params);
    }
}
