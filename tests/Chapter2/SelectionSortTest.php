<?php

namespace App\Chapter2\SelectionSort;

use PHPUnit\Framework\TestCase;

class SelectionSortTest extends TestCase
{
    public $toSort = [5, 2, 500, 8, 30, 35, 555, 25, 600, 1000, 1, 873];

    public function testFindSmallest() {
        $sort = new SelectionSort();
        $this->assertEquals(10, $sort->findSmallest($this->toSort));
    }

    public function testSelectionSort()
    {
        $sort = new SelectionSort();
        $expected = [1, 2, 5, 8, 25, 30, 35, 500, 555, 600, 873, 1000];
        $this->assertEquals($expected, $sort->selectionSort($this->toSort));
    }
}
