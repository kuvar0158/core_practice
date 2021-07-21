<!-- //refrence link-: https://www.mindtwo.de/guidelines/coding/laravel -->
=============laravel coading standared Follow & Laravel naming conventions=============

refrence link-: https://dev.to/lathindu1/laravel-best-practice-coding-standards-part-01-304l

1) Article 1 : Naming Conventions.

a) 01.01 Controller 👈
Name should be in singular form.
Should use PascalCase.

ex-: CustomerController.php

2) 01.02 Route 👈
01.02.01 Route Url 👈
Url should be in plural form.
Can use kebab-case if there are two words in single part For best Practice.
ex-: /customers/password-reset

3) Route Name 
Should use snake_case with dot notation.
Better to use same name like in URL.
ex-: ->('customers.password_reset')
 
4) DataBase Related
Migration Should use name as what you want to do with snake_case.
ex-: 2021_03_19_033513_create_customers_table.php

5) Table
Table name must be in plural form.
Should use snake_case.
ex-: cart_items

6) Pivot Table
Table name must be in singular form.
Should use snake_case
Names should be in alphabetical Order.
ex-: course_student

7) Table Columns
Should use snake_case.
Should not use table name with column names.
ex-: first_name

8) Foreign key 

Should use snake_case.
Should use singular table name with id prefix.
ex-: faq_id

9) Primary key
only use name as id.

10) Model
Model name must be in singular form.
Should Use PascalCase
Model name must be a singular form or table name.
Ex: CustomerUser

11) Model Single relations [Has One, Belongs To]
Method name must be in singular form.
Should Use camalCase like-: studentCourse

12) Model all other relations and methods [Has Many,other]
Method name must be in plural form.
Should use camalCase
Ex-: cartItems

=======================================More Imp============================================

13) Functions 
Should Use camalCase
ex-: showData(){}

14) Variables
Should use camelCase
Must use readable words which are describe about value.
ex-: $customerMessages

15) Collection
Must described about the value.
Must be plural

Ex-: $verifiedCustomers = $customer->verified()->get()

16) Object
Must described about the value.
Must be singular
Ex-: $activeUser = User::active()->first()

17) Configs
Should use snake_case
Must described about the value.

ex-: comments_enabled	


=========================== write the way of coading approches=================================

refrence link-: https://dev.to/lathindu1/laravel-best-practice-coding-standards-part-02-a40

reference link-: https://www.mindtwo.de/guidelines/coding/laravel 



=================7 Best Practices in Laravel You Should Know=====
Refrence link-: https://cerwyn.medium.com/7-best-practices-in-laravel-you-should-know-2ed9878293de