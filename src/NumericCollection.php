<?php
namespace PhF\Collection;

/**
 * Collection of numerics
 */
class NumericCollection extends \PhF\Collection\Collection
{
    protected static $invalidElementMessageAllowed = 'numerics';

    /**
     * @return int|float|string
     */
    public function bottom()
    {
        return parent::bottom();
    }

    /**
     * @return int|float|string
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * @return int|float|string
     */
    public function offsetGet(
        $index
    ) {
        return parent::offsetGet($index);
    }

    /**
     * @return int|float|string
     */
    public function pop()
    {
        return parent::pop();
    }

    /**
     * @return int|float|string
     */
    public function shift()
    {
        return parent::shift();
    }

    /**
     * @return int|float|string
     */
    public function top()
    {
        return parent::top();
    }

    public function validate(
        $value
    ): bool {
        return \is_numeric($value);
    }
}
