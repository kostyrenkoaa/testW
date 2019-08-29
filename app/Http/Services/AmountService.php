<?php

namespace App\Http\Services;

class AmountService
{
    /**
     * Возвращает результат сложение чисел ввиде строки
     *
     * @param string $a
     * @param string $b
     * @return string
     */
    public function getAmount(string $a, string $b): string
    {
        if (strlen($a) > strlen($b)) {
            return $this->summation($a, $b);
        }

        return $this->summation($b, $a);
    }

    /**
     * Производит суммирование и возвращает его результат
     *
     * @param string $a
     * @param string $b
     * @return string
     */
    private function summation(string $a, string $b): string
    {
        $lenB = strlen($b);
        $result = '';
        $step = 1;
        $setUp = 0;
        for ($i = (strlen($a) - 1); $i >= 0; $i--) {
            $next = (int)$a[$i] + $setUp;
            if ($step <= $lenB) {
                $next += (int)$b[$lenB - $step];
                $step++;
            }
            if ($next > 9) {
                $next -= 10;
                $setUp = 1;
            } else {
                $setUp = 0;
            }
            $result .= (string)$next;
        }

        if ($setUp) {
            $result .= '1';
        }

        return strrev($result);
    }
}
