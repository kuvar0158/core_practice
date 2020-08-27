
<!-- ----================= You have seen MySQL pattern matching with LIKE ...%. MySQL supports another type of pattern matching operation based on the regular expressions and the REGEXP operator--------=== -->

1:-Consider we have a table called person_tbl and it is having a field called name −

a) Query to find all the names starting with 'st' −

mysql> SELECT name FROM person_tbl WHERE name REGEXP '^st';

b) Query to find all the names ending with 'ok' −

mysql > SELECT name FROM person_table WHERE name REGEXP 'ok$';

c) Query to find all the names, which contain 'mar' −

mysql> SELECT name FROM person_tbl WHERE name REGEXP 'mar';

d) Query to find all the names starting with a vowel and ending with 'ok' −

mysql> SELECT FirstName FROM intque.person_tbl WHERE FirstName REGEXP '^[aeiou].*ok$';

reference link is here:-https://www.tutorialspoint.com/mysql/mysql-regexps.htm


You can use IN clause to replace many OR conditions

You can use BETWEEN clause to replace a combination of "greater than equal AND less than equal" conditions.

You can use UNION if you want to select rows one after the other from several tables or several sets of rows from a single table all as a single result set.

best ex: reference is here:-https://www.tutorialspoint.com/mysql/mysql-union-keyword.htm


mysql tutorials-: https://www.javatpoint.com/mysql-tutorial
https://www.techonthenet.com/mysql/index.php


