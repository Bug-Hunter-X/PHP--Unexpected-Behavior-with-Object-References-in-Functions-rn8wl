In PHP, a common yet subtle issue arises when dealing with references and objects, especially within functions.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

function modifyObject(MyClass &$obj) {
    $obj = new MyClass(); // Assigns a NEW object to the reference
    $obj->value = 10;
}

$myObject = new MyClass();
echo $myObject->value; // Outputs 0
modifyObject($myObject);
echo $myObject->value; // Still outputs 0, not 10!
```

The problem lies in the `modifyObject` function.  The line `$obj = new MyClass();` doesn't modify the original object passed as a reference; instead, it reassigns the reference itself to a completely new object.  The original object remains untouched.