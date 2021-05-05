<?php
namespace PhF\Collection;

use InvalidArgumentException;

class ArrayCollectionTest extends CollectionTestAbstract
{
    protected static $sut = ArrayCollection::class;

    protected static $validElements = [[1,2], [3,4], [5,6]];

    protected static $invalidElement = 'foo';
}
