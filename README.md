## Configuración de VirtualHost
```apache
<VirtualHost *:80>
    ServerAdmin webmaster@proyectodaw.test
    DocumentRoot "c:/servidor/apache24/htdocs/proyectodaw"
    ServerName proyectodaw.test
    ErrorDocument 400 /index.php?page=error
    ErrorDocument 401 /index.php?page=error
    ErrorDocument 403 /index.php?page=error
    ErrorDocument 404 /index.php?page=error
    ErrorDocument 500 /index.php?page=error
    ErrorLog "logs/proyectodaw.test-error.log"
    CustomLog "logs/proyectodaw.test-access.log" common
    <Directory "c:/servidor/apache24/htdocs/proyectodaw">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
        DirectoryIndex index.php index.html
    </Directory>
</VirtualHost>
```
