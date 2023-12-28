<p align="center"><img src="public/resources/assets/img/logo.png"></p>
## Run local
### Install dependencies
```
composer install
```
```
npm install
```
### Laravel Development Server
```
php artisan serve
```
### Vite Development Server
```
npm run dev
```
### Docker (MySQL, MailHog)
```
docker compose up
```
### Database Migrations
```
php artisan migrate:fresh --seed
```
## Setup
### Install dependencies
```
composer install
```
```
npm install
```
### Vite Build
```
npm run build
```
### Create .env from .env.example
Make sure to fill then .env properly and that the Database is available.
```
php artisan db:show
```
### Database Migrations
```
php artisan migrate:fresh
```
### Create User
Create User using Tinker
```
php artisan tinker
```
```
$user = User::create(['name' => 'Example User', 'email' => 'mail@example.com', 'password' => 'example']);
```
```
$user->markEmailAsVerified();
```
