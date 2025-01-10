# PHP: Object Reference Reassignment Bug

This repository demonstrates a common, yet easily missed, bug in PHP related to object references and function parameters. The bug showcases how reassigning a reference within a function does not modify the original object passed by reference, resulting in unexpected behavior.

The `bug.php` file contains the buggy code, and `bugSolution.php` demonstrates a correct way to modify an object passed by reference.

## Bug Description
When an object is passed by reference to a function, and a new object is assigned to the reference within the function, the original object remains unchanged outside of the function. This occurs because the reference is altered to point to a new object, not modifying the existing one.

## Solution
The solution involves modifying the object's properties directly, rather than reassigning the entire object to a new one.

## How to run
1. Clone the repository.
2. Run the `bug.php` and observe the output.
3. Run `bugSolution.php` and see the corrected behavior.