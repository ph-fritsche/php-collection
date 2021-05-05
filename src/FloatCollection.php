<?php
namespace PhF\Collection;

/**
 * Collection of floats
 */
class FloatCollection extends \PhF\Collection\Collection
{
    protected static $invalidElementMessageAllowed = 'floats';

    public function bottom(): float
    {
        return parent::bottom();
    }

    public function current(): float
    {
        return parent::current();
    }

    public function offsetGet(
        $index
    ): float {
        return parent::offsetGet($index);
    }

    public function pop(): float
    {
        return parent::pop();
    }

    public function shift(): float
    {
        return parent::shift();
    }

    public function top(): float
    {
        return parent::top();
    }

    public function validate(
        $value
    ): bool {
        return \is_float($value);
    }
}
