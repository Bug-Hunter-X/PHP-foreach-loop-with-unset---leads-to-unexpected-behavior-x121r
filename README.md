# PHP Foreach Loop with Unset() Bug

This repository demonstrates a subtle bug in PHP related to using `unset()` within a `foreach` loop that iterates over an array.  The issue stems from how PHP re-indexes the array after each call to `unset()`, which can lead to elements being skipped or not processed correctly.

The `bug.php` file contains code illustrating the problem, while `bugSolution.php` provides a corrected version.

## Bug Description

When using `unset()` inside a `foreach` loop to remove elements from an array, PHP re-indexes the array. This means the loop may skip elements because the index used to iterate may change after `unset()` is called. This results in incomplete array processing.

## Solution

The solution involves iterating over a copy of the array's keys or using a different approach such as `array_filter()` or a `while` loop with numerical index.