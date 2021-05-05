<?php
namespace PhF\Collection;

use InvalidArgumentException;

class FloatCollectionTest extends CollectionTestAbstract
{
    protected static $sut = FloatCollection::class;

    protected static $validElements = [4.5, 5.0, 5.5];

    protected static $invalidElement = 'foo';
}
