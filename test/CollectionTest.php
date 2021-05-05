<?php
namespace PhF\Collection;

use InvalidArgumentException;

class CollectionTest extends \PHPUnit\Framework\TestCase
{
    public function testInsertElements()
    {
        $collection = $this->getWorkingMock();
        $collection->__construct('foo', 'bar');

        $collection[1] = 'baz';

        $collection->unshift('abc');

        $collection->add(2, 'def');

        $collection->push('ghi');

        $this->assertEquals(['abc', 'foo', 'def', 'baz', 'ghi'], [...$collection]);
    }

    public function testAddInvalidElement()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->getFailMock()->add(0, 'foo');
    }

    public function testPushInvalidElement()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->getFailMock()->push('foo');
    }

    public function testSetInvalidElement()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->getFailMock()->offsetSet(0, 'foo');
    }

    public function testUnshiftInvalidElement()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->getFailMock()->unshift('foo');
    }

    private function getWorkingMock(): Collection
    {
        static $mock;

        if (!isset($mock)) {
            $mock = $this->getMockForAbstractClass(Collection::class);
            $mock->expects($this->any())->method('validate')->willReturn(true);
        }

        return $mock;
    }

    private function getFailMock(): Collection
    {
        static $mock;
        
        if (!isset($mock)) {
            $mock = $this->getMockForAbstractClass(Collection::class);
            $mock->expects($this->any())->method('validate')->willReturn(false);
        }

        return $mock;
    }
}
