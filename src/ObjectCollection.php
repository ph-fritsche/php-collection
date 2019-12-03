<?php
namespace nextdev\Collection;

/**
 * Collection of objects
 */
class ObjectCollection extends \nextdev\Collection\Collection
{
    protected static $invalidElementMessageAllowed = 'objects';

    public function bottom(): object
    {
        return parent::bottom();
    }

    public function current(): object
    {
        return parent::current();
    }

    public function offsetGet(
        $index
    ): object {
        return parent::offsetGet($index);
    }

    public function pop(): object
    {
        return parent::pop();
    }

    public function shift(): object
    {
        return parent::shift();
    }

    public function top(): object
    {
        return parent::top();
    }

    public function validate(
        $value
    ): bool {
        return \is_object($value);
    }
}
