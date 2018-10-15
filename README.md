# Perfect Number Challenge #

## About
  In the task it mentions that a function should be created, that can be found in root directory in the `perfect_number.php` file.

  There is also an OOP version available `App\Services\NumberClassifier` service.

## Installation

Clone the repository

`git clone git@github.com:imants-kusins/perfect-number.git`

Install composer dependencies

`cd perfect-number && composer install`

## API

The endpoint to use fo `OOP` is 
`/api/v1/classify/oop/{number}`

The endpoint to use for `functional` is 
`/api/v1/classify/func/{number}`


## Tests

To run the tests
`./vendor/bin/phpunit`

