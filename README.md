Paginator exercise as according to the given specification.

>We have a service that returns 15 search results with offset. At some point we stopped using those 15 results per page and started using only 10, but the service continues returning 15. How would we tackle this issue?
>
>On page one we call the service one time (for page one) and use the first 10 results.
>On page two we call the service two times (one for page one e one for page two) and use the last 5 results from the first call and the first 5 from the last one.
>On page three we call the service one time (for page two) and use the last ten results.
>
>On page 4 we call the service one time (for page three) and use the first 10 results.
>And then the pattern repeats.

To run this code:

- Clone this repository `git clone https://github.com/DailyMatters/weirdPaginator.git`.
- Run a `composer install`.
- Run unit tests with `./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/PaginatorTest`.

To do:
- The getPage() function should be renamed. The current name doesn't reflect the actual functionality of it.
- A script to run the implementation. As of now, to test the code we need to uncomment some code on `src/Paginator.php` to get some results.
- Finish unit tests. As of now, only the `getShift()` and `getPage()` methods are covered.
