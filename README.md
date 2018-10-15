# Perfect Number Challenge #

## Installation

Clone the repository

`git clone git@github.com:imants-kusins/perfect-number.git`


``

## Tests



### Perfect, Abundant, and Deficient ###

Whether a number is one of these three categories is based on that number's [aliquot sum](https://en.wikipedia.org/wiki/Aliquot_sum). The aliquot sum is calculated by the sum of the divisors or factors of a number, not including the number itself.

For example, the proper divisors of 15 (that is, the positive divisors of 15 that are not equal to 15) are 1, 3 and 5, so the aliquot sum of 15 is 9 (1 + 3 + 5).

* **A perfect number** is where the aliquot sum = number
  * 6 is a perfect number because (1 + 2 + 3) = 6
* **An abundant number** is where the aliquot sum > number
  * 12 is an abundant number because (1 + 2 + 3 + 4 + 6) = 16
* **A deficient number** is where the aliquot sum < number
  * 8 is a deficient number because (1 + 2 + 4) = 7

### Task ###

Write a function to determine whether a given number is perfect, abundant, or deficient:

```php
<?php
function getClassification($integer) {
    // returns 'perfect', 'abundant', or 'deficient'
}
```

Once you have created your function to check a perfect number, we would like you to create an API using HTTP and JSON to expose this functionality. You may structure the API in the way you see fit.

### Tests ###

Please also include a suite of unit tests for the application.

### Tips ###

When completing the task, please think about:

- object-oriented structure
- performance
- exception handling
- documentation