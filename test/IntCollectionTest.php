<?php
namespace nextdev\Collection;

use InvalidArgumentException;

class IntCollectionTest extends CollectionTestAbstract
{
    protected static $sut = IntCollection::class;

    protected static $validElements = [1, 2, 3];

    protected static $invalidElement = 'foo';
}
