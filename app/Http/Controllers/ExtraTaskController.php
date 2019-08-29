<?php

namespace App\Http\Controllers;

use App\Http\Forms\AmountForm;
use App\Http\Services\AmountService;
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

    public function getResult(Request $request, AmountService $amountService)
    {
        $form = new AmountForm($request);
        if (!$form->isValid()) {
            return response()->json([
                'error' => $form->getError(),
                'result' => ''
            ]);
        }

        list($a, $b) = $form->getData();

        return response()->json([
            'error' => '',
            'result' => $amountService->getAmount($a, $b)
        ]);
    }
}
