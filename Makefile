fix:
	wget http://cs.sensiolabs.org/download/php-cs-fixer-v2.phar -O php-cs-fixer.phar
	php php-cs-fixer.phar fix ./src

stan:
	wget https://github.com/phpstan/phpstan/releases/download/0.9.2/phpstan.phar -O phpstan.phar
	php phpstan.phar analyse -l 7 --autoload-file=vendor/autoload.php ./src

test:
	./vendor/bin/phpunit

test-cov:
	./vendor/bin/phpunit --coverage-html=./build