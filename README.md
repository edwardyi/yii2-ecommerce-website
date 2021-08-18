[2021.08.01] Yii Ecommerce Project
===
###### tags: `yii` `e-commerce`

# Change Logs
* [2021.08.01] Init

### SetUp Steps

* Composer install
* Execute Init file
* Docker-compose phpmyadmin service setup

### SignUp User For Both Sites

### Backend Theme SetUp

* install SB Admin

```cmd=
wget https://github.com/startbootstrap/startbootstrap-sb-admin-2/archive/gh-pages.zip
sudo apt-get install unzip
unzip gh-pages.zip 
```

### Add .htaccess to web folder

If your webserver is Apache you'll need to add an .htaccess file with the following content to web (or public_html or whatever) (where the index.php file is located):

```conf=
Options +FollowSymLinks
IndexIgnore */*

RewriteEngine on

# if a directory or a file exists, use it directly
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

# otherwise forward it to index.php
RewriteRule . index.php
```

https://github.com/yiisoft/yii2/blob/master/docs/guide/tutorial-shared-hosting.md