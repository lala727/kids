<h1 align="center"><img src="public/appname.svg" width="500"></h1>

## Framework used

- [Laravel 8.X](https://laravel.com/docs/8.x)
- [Bootstrap 5.X](https://getbootstrap.com/docs/5.0/getting-started/introduction/)

<h1 align="center"><img src="public/docs/imgs/ut/Screenshot (226).png"></h1>

## Server Requirements

- PHP >= 7.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## License

GNU General Public License v3.0

### Steps to install:
1. Clone or donwload the repository.
2. Create **purify** folder in `storage/app/` directory.
3. Run `cp .env.example .env`.
4. Run `docker-compose up -d`.
5. Run `docker exec -it db sh`. Inside the shell, run:

    ```sh
    :/# mysql -u root -p
    ```

    Mysql **Root password**: `your_mysql_root_password` in the `docker-compose.yml` file. Then run following commands:

    ```sql
    mysql> SHOW DATABASES;
    mysql> GRANT ALL ON unifiedtransform.* TO 'unifiedtransform'@'%' IDENTIFIED BY 'secret';
    mysql> FLUSH PRIVILEGES;
    mysql> EXIT;
    ```
6. Finally, exit the container by running `exit` in the container shell.
7. Run `docker exec -it app sh`. Inside the shell, run following commands:

    ```sh
    :/# composer install
    :/# php artisan key:generate
    :/# php artisan config:cache
    :/# php artisan migrate:fresh --seed
    ```

    Then exit from the container.
8. Visit **http://localhost:8080**. Admin login credentials:

    - Email: admin@ut.com
    - Password: password

## Steps to follow:
Please carefully follow the steps to setup the school.

**Role: Admin**

**School Dashboard**
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot 2021-12-07 at 01-27-05 Unifiedtransform.png"></h1>




