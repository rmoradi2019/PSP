RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([^\.]+)$ $1.php [NC,L]
# php -- BEGIN cPanel-generated handler, do not edit
# Set the “ea-php56” package as the default “PHP” programming language.
<IfModule mime_module>
  AddHandler application/x-httpd-ea-php56 .php .php5 .phtml
</IfModule>
# php -- END cPanel-generated handler, do not edit
