# php_blog
Этапы запуска этого приложения (памятка как все это запустить)
1)установка Composer он должен работать
2)Composer init
3)Команды для установки фраймворека Slim 
    a)composer require slim/slim:"4.*"
    b)composer require slim/psr7
4) Создание файла .htaccess 
    в него внести данные: RewriteEngine On
                         RewriteCond %{REQUEST_FILENAME} !-f
                         RewriteCond %{REQUEST_FILENAME} !-d
                         RewriteRule ^ index.php [QSA,L]
   
