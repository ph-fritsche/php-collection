<?php
namespace nextdev\Collection;

use InvalidArgumentException;
use SplDoublyLinkedList;

use nextdev\Varinfo\Varinfo;

/**
 * Collection of values satisfying a given expectation
 */
abstract class Collection extends SplDoublyLinkedList
{
    /**
     * Exception message for invalid elements
     */
    protected static $invalidElementMessage = 'Elements of %s must be %s - %s was given';

    /**
     * Description of allowed elements
     */
    protected static $invalidElementMessageAllowed = '...';

    public function __construct(
        ...$values
    ) {
        foreach ($values as $v) {
            $this->push($v);
        }
    }

    public function add(
        $index,
        $newval
    ): void {
        $this->assertValid($newval);
        parent::add($index, $newval);
    }

    public function offsetSet(
        $index,
        $newval
    ): void {
        $this->assertValid($newval);
        parent::offsetSet($index, $newval);
    }

    public function push(
        $value
    ): void {
        $this->assertValid($value);
        parent::push($value);
    }

    public function unshift(
        $value
    ): void {
        $this->assertValid($value);
        parent::unshift($value);
    }

    /**
     * Test if a value can be a valid element for this collection
     */
    abstract public function validate(
        $value
    ): bool;

    /**
     * Throw an exception for invalid arguments
     */
    protected function throwInvalidElement(
        $value
    ): void {
        throw new InvalidArgumentException(\sprintf(
            static::$invalidElementMessage,
            static::class,
            static::$invalidElementMessageAllowed,
            new Varinfo($value),
        ));
    }

    private function assertValid(
        $value
    ): void {
        if (!$this->validate($value)) {
            $this->throwInvalidElement($value);
        }
    }
}
