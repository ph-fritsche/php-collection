<?php
namespace PhF\Collection;

use InvalidArgumentException;

abstract class CollectionTestAbstract extends \PHPUnit\Framework\TestCase
{
    /**
     * Name of the tested collection class
     */
    protected static $sut = '';

    /**
     * Three valid elements
     */
    protected static $validElements = [null, null, null];

    /**
     * One invalid element
     */
    protected static $invalidElement = null;

    public function testGetElements()
    {
        $collection = new static::$sut(...static::$validElements);

        $collection->rewind();
        $this->assertEquals(static::$validElements[0], $collection->current());

        $this->assertEquals(static::$validElements[1], $collection[1]);

        $this->assertEquals(static::$validElements[0], $collection->shift());
        
        $this->assertEquals(static::$validElements[1], $collection->bottom());

        $this->assertEquals(static::$validElements[2], $collection->pop());

        $this->assertEquals(static::$validElements[1], $collection->top());
    }

    public function testInvalidElement()
    {
        $collection = new static::$sut();

        $this->expectException(InvalidArgumentException::class);

        $collection->add(0, static::$invalidElement);
    }
}
