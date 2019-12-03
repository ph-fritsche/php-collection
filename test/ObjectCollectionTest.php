<?php
namespace nextdev\Collection;

use InvalidArgumentException;
use stdClass;

class ObjectCollectionTest extends CollectionTestAbstract
{
    protected static $sut = ObjectCollection::class;

    protected static $validElements;

    protected static $invalidElement = 'foo';

    public static function setUpBeforeClass(): void
    {
        self::$validElements = [new stdClass(), new stdClass(), new stdClass()];
    }
}
