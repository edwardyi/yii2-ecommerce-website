FROM yiisoftware/yii2-php:7.2-apache

# Change document root for Apache
# RUN sed -i -e 's|/app/web|/app/frontend/web|g' /etc/apache2/sites-available/000-default.conf
COPY /apache2/000-default.conf /etc/apache2/sites-available/000-default.conf