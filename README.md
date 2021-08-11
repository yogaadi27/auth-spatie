<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Auth Laravel 8 + Spatie 

Install Laravel 8 for web application ready with simple package auth Spatie.

## Step
1. Go to folder in htdocs or else to install
2. Click right -> gith bash
3. Run git clone _link clone project.git_
4. Go to the folder application using cd
5. Run composer install on your cmd or terminal
6. Copy .env.example file to .env on root folder. 
    You can type copy .env.example .env if using command prompt Windows 
     or cp .env.example .env if using terminal Ubuntu
7. Open your .env file and change the database name (DB_DATABASE)
8. Run php artisan key:generate
9. Run php artisan migrate
10. Run php artisan serve

## Default User

This aplication have 2 role ( admin + user ). you can change in Seeder.

How to run ?

Open terminal and run php artisan migrate:fresh --seed 

Admin 
Username : admin@gmail.com / password : admin

User :
Username : johndoe@gmail.com / password : 12345

---------------------Thanks You---------------------------------------
