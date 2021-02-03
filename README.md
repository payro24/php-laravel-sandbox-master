<p align="center"><img src="public/image/logo.svg" width="400"></p>

## About payro24 SandBox
Simple project on Laravel framework for visual test API's payment service of payro24.

## Requirments

1. PHP >= 5.6
2. MySQL >= 5.7
3. Composer >= 1.9.0

## Deploy project

1. git clone git@github.com:payro24/sandbox.git
2. cd sandbox
3. composer install
4. cp .env.example .env
5. vi .env
6. php artisan migrate:fresh
7. php artisan db:seed
8. php artisan key:generate
9. echo '127.0.0.1 sandbox.payro24.local' | sudo tee -a /etc/hosts
10. sudo php artisan serve --host=sandbox.payro24.local --port=80
11. Open project on http://sandbox.payro24.local

