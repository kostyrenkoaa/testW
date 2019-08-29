<?php

namespace App\Http\Controllers;

use App\Http\Forms\AmountForm;
use App\Http\Services\AmountService;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;

class ExtraTaskController extends Controller
{
    /**
     * Action для вывода страницы
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPage()
    {
        $params = [
            'title' => "Второе задание"
        ];

        return view('extra_task', $params);
    }

    /**
     * Action для получения результатов вычисления
     *
     * @param Request $request
     * @param AmountService $amountService
     * @return JsonResponse
     */
    public function getResult(Request $request, AmountService $amountService): JsonResponse
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
