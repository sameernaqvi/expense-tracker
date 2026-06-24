FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
	nodejs \
	npm \
	curl \
	git \
	unzip \
	zip \
	&& apk add --no-cache --virtual .build-deps \
	$PHPIZE_DEPS \
	oniguruma-dev \
	&& docker-php-ext-install \
	pdo_mysql \
	mbstring \
	exif \
	pcntl \
	bcmath \
	&& apk del .build-deps

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

WORKDIR /var/www/html
