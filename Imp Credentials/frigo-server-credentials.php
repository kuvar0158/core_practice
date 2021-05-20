SSH: ssh -i askdrfigo.pem ubuntu@65.1.64.43
SSH: ssh -i askdrfigo.pem ubuntu@35.154.69.21

host-: 35.154.69.21
user-: ubuntu

cd /var/www/admin

----------======================database credentials------------------================
user-: askdrfrigos
pass-: Askfrigo#*&513!

 CREATE USER 'askdrfrigos'@'localhost' IDENTIFIED BY 'Askfrigo#*&513!';
 GRANT ALL PRIVILEGES ON * . askdrfrigos TO 'askdrfrigos'@'localhost';
 FLUSH PRIVILEGES;

 mysql -u askdrfrigos -p 
 Askfrigo#*&513!

 show databases;
 use askfrigos;

 ---------=====================unzip process on server ============-----------

zip -r exm.zip exm/
sudo zip -r askdrfigo-backend.zip -i askdrfigo/

step 1st -: go to root directory on sever enter zip and name of your zip files and than name of that which want to zip

for permission issue you have to add sudo at starting points.

------==================database import from cmd ==========================
 mysql -u username -p databasename < test.sql
 mysql -u 
 mysql -u askdrfrigos -p askfrigos < askfrigos.sql
mysql -u askdrfrigos -p 
pass-: Askfrigo#*&513!
mysql> create database medglowapp_db_staging
use medglowapp_db_staging
CREATE DATABASE medglowapp_db_staging;
CREATE DATABASE askfrigos;
drop database askfrigos;

------------===================psql server details----------------==================
<!-- psql -h postgresql.guebs.net -U drfigo-dbaskdrfigo -->
user-: psql -h 127.0.0.1 -U drfigo -p 5432 -d dbaskdrfigo
user-: psql -h 127.0.0.1 -U drfigo -p 5432 -d dbaskdrfigov1
password -: drfigo#123!

show list of tables-: \dt

show table name-: \d table_name

DROP TABLE IF EXISTS questions;

select * from companies;

php artisan infyom:model --fromTable --tableName staffs Staff

php artisan infyom:api Question 

=------------------validation for create model api -------------------------=========

refrence link-: https://labs.infyom.com/laravelgenerator/docs/5.5/getting-started

{
    "question":"can i ask something",
    "userCountry":"US",
    "claimedBy":3,
    "claimedOn":"2021/03/16",
    "answer":"Yes, I can reply",
    "answeredOn":"2021/03/17",
    "legalStatus":1,
    "passcode":"xyzWre2",
    "isActiveStatus":1,
    "lastModifiedBy":2
}
integer:unsigned:foreign,questions,id
https://askdrfigo.admin.techvalens.com/api/user/1/responses
Route::resource('user.responses', 'ResponseAPIController');

https://askdrfigo.admin.techvalens.com/api/response/1/user