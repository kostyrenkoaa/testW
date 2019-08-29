<?php

namespace App\Http\Forms;

use Illuminate\Http\Request;

class AmountForm
{
    private $isValid = true;
    private $data;
    private $error;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        if ($request->method() != "POST") {
            $this->isValid = false;
            $this->error = 'Данные должны быть переданы методом post';
            return;
        }

        $a = (string)$request->post('a');
        $b = (string)$request->post('b');

        if (empty($a) || empty($b)) {
            $this->isValid = false;
            $this->error = 'Не все данные переданы';
            return;
        }

        if (!ctype_digit($a) || !ctype_digit($b)) {
            $this->isValid = false;
            $this->error = 'Переданы должны быть только положительные числа';
            return;
        }

        $this->data = [$a , $b];
    }

    /**
     * Проверка валидности формы
     *
     * @return bool
     */
    public function isValid()
    {
        return $this->isValid;
    }

    /**
     * Возвращает переданные данные
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
}
