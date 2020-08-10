
## Multi-Authentication User and Roles


### 1.33. Initial commit - Install Laravel in Local Host
	> λ composer create-project laravel/laravel==6.0.2 lmultiauth

### 2.34. Crate Database and Configuration
	> CREATE DATABASE db_name;
	> 	DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE= db_name;
		DB_USERNAME=root
		DB_PASSWORD=

### 3.35. Laravel Default Authentication System
	> composer require laravel/ui "^1.0" --dev
	> php artisan ui vue --auth
	> git status	
	new file:   app/Http/Controllers/HomeController.php            
	modified:   composer.json                                      
	modified:   composer.lock                                      
	modified:   package.json                                       
	modified:   readme.md                                          
	modified:   resources/js/app.js                                
	modified:   resources/js/bootstrap.js                          
	new file:   resources/js/components/ExampleComponent.vue       
	new file:   resources/sass/_variables.scss                     
	modified:   resources/sass/app.scss                            
	new file:   resources/views/auth/login.blade.php               
	new file:   resources/views/auth/passwords/confirm.blade.php   
	new file:   resources/views/auth/passwords/email.blade.php     
	new file:   resources/views/auth/passwords/reset.blade.php     
	new file:   resources/views/auth/register.blade.php            
	new file:   resources/views/auth/verify.blade.php              
	new file:   resources/views/home.blade.php                     
	new file:   resources/views/layouts/app.blade.php              
	modified:   routes/web.php                                     
	modified:   webpack.mix.js   

### 4.36. Design Database Table
	> pass

### 5.37. Multi-auth Users and Roles Part 1
	> λ php artisan make:model Role -m
	> git status
		new file:   app/Role.php
        modified:   database/migrations/2014_10_12_000000_create_users_table.php
        new file:   database/migrations/2020_08_10_042026_create_roles_table.php

### 6.38. Multi-auth Users and Roles Part 2
	> git status
	 	modified:   app/Role.php
        modified:   app/User.php

### 7.39. Multi-auth Users and Roles Part 3
	> λ php artisan make:seed UsersTableSeeder
	> λ php artisan make:seed RolesTableSeeder
	> git status
		modified:   database/seeds/DatabaseSeeder.php
        new file:   database/seeds/RolesTableSeeder.php
        new file:   database/seeds/UsersTableSeeder.php
        
### 8.40. Multi-auth Users and Roles Part 4


### 9.41. Multi Auth Logic with Middleware Part 1


### 10.42. Multi Auth Logic with Middleware Part 2


### 11.43. Multi Auth Logic with Middleware Part 3


### 12.44. Multi Auth Logic with Middleware Part 4


### 13.45. Update Register Form


### 14.46. What is Middleware


### 15.47. How to use Middleware
