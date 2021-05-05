<?php
namespace PhF\Collection;

/**
 * Collection of arrays
 */
class ArrayCollection extends \PhF\Collection\Collection
{
    protected static $invalidElementMessageAllowed = 'arrays';

    public function bottom(): array
    {
        return parent::bottom();
    }

    public function current(): array
    {
        return parent::current();
    }

    public function offsetGet(
        $index
    ): array {
        return parent::offsetGet($index);
    }

    public function pop(): array
    {
        return parent::pop();
    }

    public function shift(): array
    {
        return parent::shift();
    }

    public function top(): array
    {
        return parent::top();
    }

    public function validate(
        $value
    ): bool {
        return \is_array($value);
    }
}
