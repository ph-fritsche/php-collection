<?php
namespace PhF\Collection;

/**
 * Collection of strings
 */
class StringCollection extends \PhF\Collection\Collection
{
    protected static $invalidElementMessageAllowed = 'strings';

    public function bottom(): string
    {
        return parent::bottom();
    }

    public function current(): string
    {
        return parent::current();
    }

    public function offsetGet(
        $index
    ): string {
        return parent::offsetGet($index);
    }

    public function pop(): string
    {
        return parent::pop();
    }

    public function shift(): string
    {
        return parent::shift();
    }

    public function top(): string
    {
        return parent::top();
    }

    public function validate(
        $value
    ): bool {
        return \is_string($value);
    }
}
