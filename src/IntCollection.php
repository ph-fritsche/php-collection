<?php
namespace PhF\Collection;

/**
 * Collection of integers
 */
class IntCollection extends \PhF\Collection\Collection
{
    protected static $invalidElementMessageAllowed = 'integers';

    public function bottom(): int
    {
        return parent::bottom();
    }

    public function current(): int
    {
        return parent::current();
    }

    public function offsetGet(
        $index
    ): int {
        return parent::offsetGet($index);
    }

    public function pop(): int
    {
        return parent::pop();
    }

    public function shift(): int
    {
        return parent::shift();
    }

    public function top(): int
    {
        return parent::top();
    }

    public function validate(
        $value
    ): bool {
        return \is_int($value);
    }
}
