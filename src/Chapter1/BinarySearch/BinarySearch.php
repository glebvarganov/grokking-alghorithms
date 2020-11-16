<?php

namespace App\Chapter1\BinarySearch;

class BinarySearch
{

    public function search($list, $item)
    {
        // Границы части поиска
        $low = 0;
        $hight = count($list);

        // Перебираем, пока не сократится до одного элемента
        while ($low <= $hight) {

            // Вычисляем середину, то округляем значение в меньшую сторону
            $mid = floor(($low + $hight) / 2);
            $guess = $list[$mid]; // Предполагаемое число

            // Если поиск завершен, отдаем индекс
            if ($guess == $item) {
                return $mid;
            }

            // Если середина больше искомого, то верхняя граница будет: середина - 1
            if ($guess > $item) {
                $hight = $mid - 1;
            }

            // Иначе, нижняя будет: середина + 1
            else {
                $low = $mid + 1;
            }
        }

        return null;
    }
}

/*
    $list = [1, 3, 4, 6, 7, 8, 90, 123, 156, 678, 1000];
    $searh = new BinarySearch();
    var_dump($searh->search($list, 678));
*/