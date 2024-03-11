Laravel v10(PHP: 8.0, MySQL: 5.0)

### Setup instructions

1: Change the .env.example file to .env

2: Create a database named `blackcart`

3: Install Laravel composer

```
composer install
```

4: Run database migration command

```
php artisan migrate --seed
```

5: Run Laravel backend

```
php artisan serve
```

### API requests

You can call the API by calling `http://127.0.0.1:8000/stores/1/products` with Postman.

![image](https://github.com/yuriyleve/blackcart/assets/146879078/be3980ee-0b31-4455-87d4-1ee12db86b80)

### Testing

I made ProductTest.php in the `root/tests/Feature/ProductTest.php` and you can run the command below:

```
php artisan test
```
![image](https://github.com/yuriyleve/blackcart/assets/146879078/34361a9a-36c4-48b1-9589-c93ac9f83dd5)


