FROM php:7.0-fpm-stretch

# Copy php-extension-installer script for easy installation of PHP extensions
# https://github.com/mlocati/docker-php-extension-installer#supported-php-extensions

COPY --from=mlocati/php-extension-installer:1.5.11 /usr/bin/install-php-extensions /usr/local/bin/

# install the PHP extensions we need

RUN install-php-extensions zip gd xdebug opcache intl

# install PHP composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_VERSION 1.10.6
# ENV COMPOSER_VERSION 2.2.3
ENV COMPOSER_HOME /var/www/.composer

RUN curl -s -f -L -o /tmp/installer.php https://raw.githubusercontent.com/composer/getcomposer.org/e831e1e4d6cabfb11fa9657103cf728e6eb9e295/web/installer \
    && php -r " \
        \$signature = '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5'; \
        \$hash = hash('SHA384', file_get_contents('/tmp/installer.php')); \
        if (!hash_equals(\$signature, \$hash)) { \
            unlink('/tmp/installer.php'); \
            echo 'Integrity check failed, installer is either corrupt or worse.' . PHP_EOL; \
            exit(1); \
        }" \
    && php /tmp/installer.php --no-ansi --install-dir=/usr/bin --filename=composer --version=${COMPOSER_VERSION} \
    && composer --ansi --version --no-interaction

# copy certificate authority

COPY ./certificate-authority/certificate.cert /usr/local/share/ca-certificates/certificate.crt
RUN update-ca-certificates

# add config overrides

COPY zz-php.ini $PHP_INI_DIR/conf.d/zz-php.ini
COPY zz-www.conf /usr/local/etc/php-fpm.d/zz-www.conf
COPY zz-xdebug.ini $PHP_INI_DIR/conf.d/zz-xdebug.ini
COPY zz-opcache.ini $PHP_INI_DIR/conf.d/zz-opcache.ini
