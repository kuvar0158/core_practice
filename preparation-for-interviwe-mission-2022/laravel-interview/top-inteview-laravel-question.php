1) ===================find the thired highest salery of employee=============================
Ans-: SELECT * FROM employee ORDER BY salary DESC LIMIT 2,1;

2) ========================mysql procedure=======================================
Ans-:

3) ==========group by how we can used=====================
Ans-: $user_info = DB::table('usermetas')
     ->select('browser', DB::raw('count(*) as total'))
     ->groupBy('browser')
     ->get();

4) ================================what is reverse routing================================================
Ans-: Laravel Reverse routing is the process of generating the URL based on name or symbol. It generates URL's based on route declarations. Reverse routing makes your application so much more flexible and helps the developer to write cleaner codes in View. It defines a relationship between links and Laravel routes. When a link is created by using names of existing routes, appropriate Uri's are created automatically by Laravel.

// route declaration

Route::get('login', 'users@login');
Using reverse routing we can create a link to it and pass in any parameters that we have defined. Optional parameters, if not supplied, are removed from the generated link.

{{ HTML::link_to_action('users@login') }}
It will automatically generate an Url like http://xyz.com/login in view.

5) ================================================what is laravel contracts===========================================
Ans-: Laravel's Contracts are nothing but a set of interfaces that define the core services provided by the Laravel framework.


6) =============What are the new features of php 8?====================================
1) string to number comparisons

PHP 7								PHP 8 
0 == 'foobar' // true 				 0 == 'foobar' // false

2) Constructor property promotion

PHP 7
class Point {
  public float $x;
  public float $y;
  public float $z;

  public function __construct(
    float $x = 0.0,
    float $y = 0.0,
    float $z = 0.0
  ) {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }
}
php 8

class Point {
  public function __construct(
    public float $x = 0.0,
    public float $y = 0.0,
    public float $z = 0.0,
  ) {}
}

8) =============What are the new features of laravel 8?====================================
Ans-:
app/Models Directory
New Landing Page
Route Caching
Maintenance Mode
Job Batching
Laravel Jetstream

9) =====================what is service provider======================================

10)============================explain Laravel’s service container ?========================

Ans-: One of the most powerful feature of Laravel is its Service Container. It is a powerful tool for resolving class dependencies and performing dependency injection in Laravel.
Dependency injection is a fancy phrase that essentially means class dependencies are “injected” into the class via the constructor or, in some cases, “setter” methods.

11) ===============================how we can used multi database in laravel=====================================

1. Ensure these settings in the .env file
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=bestinterviewquestion
DB_PASSWORD=admin@123

DB_CONNECTION_SECOND=mysql
DB_HOST_SECOND=localhost
DB_PORT_SECOND=3306
DB_DATABASE_SECOND=your_db_name2
DB_USERNAME_SECOND=bestinterviewquestion
DB_PASSWORD_SECOND=admin@12345

2. Add these following lines of code in the config/database.php file to clearly define the relationship between the two databases
'mysql' => [
    'driver'    => env('DB_CONNECTION'),
    'host'      => env('DB_HOST'),
    'port'      => env('DB_PORT'),
    'database'  => env('DB_DATABASE'),
    'username'  => env('DB_USERNAME'),
    'password'  => env('DB_PASSWORD'),
],

'mysql2' => [
    'driver'    => env('DB_CONNECTION_SECOND'),
    'host'      => env('DB_HOST_SECOND'),
    'port'      => env('DB_PORT_SECOND'),
    'database'  => env('DB_DATABASE_SECOND'),
    'username'  => env('DB_USERNAME_SECOND'),
    'password'  => env('DB_PASSWORD_SECOND'),
],

3. Execute Query
$users = DB::connection('your_db_name2')->select();



12) ================What is Eloquent ORM in Laravel?=========================
Ans-: Laravel involves Eloquent ORM (Object Relational Mapper), which makes it fun to interact with the database. While using Eloquent, every database table contains their corresponding “Model” that is being used for interaction with that table. The eloquent model also allows the people to insert, update, and delete the records from the table. We can create Eloquent models using the make:model command.

13) 
