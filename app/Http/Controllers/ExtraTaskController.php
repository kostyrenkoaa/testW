<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraTaskController extends Controller
{
    public function showPage()
    {
        $params = [
            'title' => "Страница вывода тестового задания"
        ];

        return view('extra_task', $params);
    }
}
