git remote add origin https://github.com/pierangelo1982/laravel-test.git

dependency
```
sudo apt install php7.4-common \
                php7.4-bcmath \
                openssl \
                php7.4-json \
                php7.4-mbstring \
                php7.4-curl \
                php7.4-json \
                php7.4-gd \
                php7.4-intl \
                php7.4-bcmath \
                php7.4-bz2 \
                php7.4-readline \
                php7.4-zip \
                php7.4-xml

```


crea app:
`> composer create-project --prefer-dist laravel/laravel nomeapp`

start app:
`> php artisan serve`

create an empty controller:
`> php artisan make:controller PostsController`

create a basic Crud Controller
`> php artisan make:controller --resource PostsController`

migratios:
`> php artisan make:migration create_posts_table`

mugrate and named table:
`> php artisan make:migration create_posts_table --create=users`

migrate:
`> php artisan migrate`

rollback, remove migrations:
`> php artisan migrate:rollback`


### mysql

```
docker run --name test-mysql \
    -e MYSQL_ROOT_PASSWORD=123456789 \
    -d mysql:5.7
```

```
docker run --name test-phpmyadmin \
    -d --link test-mysql:db \
    -p 8081:80 phpmyadmin/phpmyadmin
```

