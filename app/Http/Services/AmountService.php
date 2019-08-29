<?php

namespace App\Http\Services;

class AmountService
{
    public function getAmount(string $a, string $b): string
    {
        if (strlen($a) > strlen($b)) {
            return $this->getResult($a, $b);
        }

        return $this->getResult($b, $a);
    }

    private function getResult(string $a, string $b): string
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
