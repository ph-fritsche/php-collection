<?php
namespace PhF\Collection;

use InvalidArgumentException;

class StringCollectionTest extends CollectionTestAbstract
{
    protected static $sut = StringCollection::class;

    protected static $validElements = ['foo', 'bar', 'baz'];

    protected static $invalidElement = 123;
}
