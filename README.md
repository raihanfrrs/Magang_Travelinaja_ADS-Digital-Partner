project developer website Travelin ADS Digital Partner

A. progres development menggunakan framework & tools :

1. Frontend : Bootstrap, jQuery
2. Backend : Laravel LTS

. project setup frontend & backend :

1. clone repository dari github.

2. jalankan perintah :

    ```
    composer install
    ```

3. Duplikat file `.env.example` kemudian ubah namanya menjadi `.env`.

4. jalankan perintah :

    ```
    php artisan key:generate
    ```

5. buat database dengan nama : `cuspat`.

6. Ubah konfigurasi database pada file `.env`
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=travelinaja
    DB_USERNAME=root
    DB_PASSWORD=
    ```
7. jalankan perintah :
    ```
    php artisan migrate:fresh --seed
    ```
8. jalankan perintah :

    ```
    php artisan serve
    ```

    / pakai valet bila ada

9. buka browser `http://127.0.0.1:8000`

10. masuk ke menu sign in lalu

- Login sebagai admin
    - username : raihan123
    - password : test123

- Login sebagai client
    - username : farras123
    - password : test123
# travelinaja
