# Collection

DRY helper for collections of validated elements.

With type hinted properties they can ensure type safety on collections without setters.

```php
class Foo
{
    public StringCollection $bar;

    public function __construct()
    {
        $this->bar = new StringCollection();
    }
}

$foo = new Foo();
$foo->bar[] = 123; // throws InvalidArgumentException
```

Extend for own entities:
```php
class BarEntity
{
    public string $baz;
}

class BarCollection extends \PhF\Collection\Collection
{
    protected static $invalidElementMessageAllowed = BarEntity::class;

    public function validate(
        $value
    ): bool {
        return $value instanceof BarEntity;
    }
}

class Foo
{
    public BarCollection $bar;

    public function __construct()
    {
        $this->bar = new BarCollection();
    }
}
```
