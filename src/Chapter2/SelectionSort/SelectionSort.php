<?php

namespace App\Chapter2\SelectionSort;

class SelectionSort
{
    /**
     * Функция для поиска минимального значения в массиве
     * Отдает индекс минимального числа
     * @param array $array
     * @return int
     */
    public function findSmallest(array $array): int
    {
        // Задаем изначально минимальное число
        $smallest = $array[0];
        // И индекс минимального числа
        $smallestIndex = 0;
        // Проходим по массиву
        for ($i = 0; $i < count($array); $i++) {
            // Если число меньше нашего минимального
            // Сделаем его минимальным и установим индекс
            if ($array[$i] < $smallest) {
                $smallest = $array[$i];
                $smallestIndex = $i;
            }
        }

        // Возвратим индекс минимального числа
        return $smallestIndex;
    }

    /**
     * Сортировка выбором
     * Получает массив, отдает отсортированный массив
     * Работает с числами
     * @param array $array
     * @return array
     */
    public function selectionSort(array $array): array
    {
        // Сбросим на всякий случай индексы
        $array = array_values($array);
        // Пустой массив, который мы будет заполнять новыми значениями
        $sortArray = [];
        // Пока есть массив - ходим по нему
        while (!empty($array)) {
            // Получаем индекс минимального числа
            $smallestIndex = $this->findSmallest($array);
            // Добавляем в новый массив
            $sortArray[] = $array[$smallestIndex];
            // Убираем из старого
            unset($array[$smallestIndex]);
            // Получим массив заново, чтобы сбросить индексы и сделать их по порядку
            $array = array_values($array);
        }

        // Возвратим отсортированный массив
        return $sortArray;
    }
}
/*
$toSort = [5, 2, 500, 8, 30, 35, 555, 25, 600, 1000, 1, 0, 873];
$sort = new SelectionSort();
echo '<pre>';
print_r($sort->selectionSort($toSort));
echo '</pre>';
*/