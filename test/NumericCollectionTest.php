<?php
namespace nextdev\Collection;

use InvalidArgumentException;

class NumericCollectionTest extends CollectionTestAbstract
{
    protected static $sut = NumericCollection::class;

    protected static $validElements = [1, '2.5', 1e6];

    protected static $invalidElement = 'foo';
}
