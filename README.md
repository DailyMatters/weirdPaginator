Paginator exercise as according to the given specification.

To run this code:

- Clone this repository `git clone https://github.com/DailyMatters/weirdPaginator.git`.
- Do a `composer install`.
- Run unit tests with `./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/PaginatorTest`.

To do:
- The getPage() function should be renamed. The current name doesn't reflect the actual functionality of it.
- A script to run the implementation. As of now, to test the code we need to uncomment some code on `src/Paginator.php` to get some results.
- Finish unit tests. As of now, only the `getShift()` and `getPage()` methods are covered.
