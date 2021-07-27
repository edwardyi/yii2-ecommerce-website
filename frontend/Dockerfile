FROM yiisoftware/yii2-php:7.2-apache

# Change document root for Apache
RUN sed -i -e 's|/app/web|/app/frontend/web|g' /etc/apache2/sites-available/000-default.conf

# Change PHP_USER_ID For Gitpod
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    PHP_USER_ID=33333 \
    PHP_ENABLE_XDEBUG=0 \
    PATH=/app:/app/vendor/bin:/root/.composer/vendor/bin:$PATH \
    TERM=linux
# COPY /apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
