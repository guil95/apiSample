test:
	- ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests --coverage-html build/coverage-report

test-coverage: test
	- xdg-open build/coverage-report/index.html