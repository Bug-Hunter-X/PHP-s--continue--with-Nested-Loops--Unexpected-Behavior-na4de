# PHP's `continue` with Nested Loops: Unexpected Behavior

This repository demonstrates an uncommon and potentially confusing behavior of the `continue` statement in PHP when used with nested loops and a level specifier (e.g., `continue 2`).  Unlike `break`, which correctly exits only the current loop, `continue` with a level specifier exits multiple loops, leading to unexpected program flow.

The `bug.php` file shows the unexpected behavior, while `bugSolution.php` offers a solution explaining how to avoid the issue. 

This unexpected behavior can introduce subtle bugs that are difficult to track down.