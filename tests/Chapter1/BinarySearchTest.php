<?php

namespace App\Chapter1\BinarySearch;

use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    public function testSearch()
    {
        $list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 100, 1500];
        $search = new BinarySearch();
        $this->assertEquals(3, $search->search($list, 4));
        $this->assertEquals(5, $search->search($list, 6));
        $this->assertNull($search->search($list, 800));

    }
}