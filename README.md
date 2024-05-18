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


**Screenshots**
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot (227).png"></h1>
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot (228).png"></h1>

**Sign In**
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot (234).png"></h1>

**Teacher's Dashboard**
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot (235).png"></h1>

**Student's Dashboard**
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot (236).png"></h1>

**Library**
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot (237).png"></h1>

**Videos**
<h1 align="center"><img src="public/docs/imgs/ut/Screenshot (238).png"></h1>




