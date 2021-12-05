# MySQL, Манипуляции с данными
___

- SHOW databases;
````
mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| a_level_mysql      |
| films              |
| module             |
| mysql              |
| performance_schema |
| phoenix            |
| sys                |
+--------------------+
8 rows in set (0.40 sec)
````
-USE films;

```
mysql> use films;
Database changed
```
-SHOW tables;

```
mysql> show tables;
+-----------------+
| Tables_in_films |
+-----------------+
| actors          |
| films           |
+-----------------+
2 rows in set (0.00 sec)

```

## CRUD данных

-CREATE table;
```
mysql> create table genre(
    -> id_genre int(50) not null auto_increment primary key ,
    -> genre varchar(255) not null);
Query OK, 0 rows affected (1.03 sec)
```
```
mysql> create table testDelete(
    -> id int(5) not null auto_increment primary key,
    -> name varchar(255) ,
    -> num int(55) default "1");
Query OK, 0 rows affected (0.53 sec)

```
-INSERT ;

```
mysql> INSERT INTO testDelete SET name = "Serg", num = 7;
Query OK, 1 row affected (0.55 sec)

mysql> INSERT INTO testDelete (name,num) VALUES ("Vladimir",5),("Anatoliy",3),("Bred",2);
Query OK, 3 rows affected (0.04 sec)
Records: 3  Duplicates: 0  Warnings: 0


```

-SELECT ;

```
mysql> SELECT * FROM testDelete;
+----+----------+------+
| id | name     | num  |
+----+----------+------+
|  1 | Serg     |    7 |
|  2 | Vladimir |    5 |
|  3 | Anatoliy |    3 |
|  4 | Bred     |    2 |
+----+----------+------+
4 rows in set (0.64 sec)
```

-SELECT DISTINCT ;

```
mysql> SELECT DISTINCT name FROM testDelete;
+----------+
| name     |
+----------+
| Serg     |
| Vladimir |
| Anatoliy |
| Bred     |
+----------+
4 rows in set (0.03 sec)
```

-SELECT * FROM ... WHERE;

```
mysql> SELECT * FROM testDelete WHERE num = 5 OR num = 7 ;
+----+----------+------+
| id | name     | num  |
+----+----------+------+
|  1 | Serg     |    7 |
|  2 | Vladimir |    5 |
|  5 | Vladimir |    5 |
+----+----------+------+
3 rows in set (0.81 sec)
```

-SELECT * FROM ... WHERE ... BETWEEN ;

```
mysql> SELECT * FROM testDelete WHERE id BETWEEN 3 AND 5;
+----+----------+------+
| id | name     | num  |
+----+----------+------+
|  3 | Anatoliy |    3 |
|  4 | Bred     |    2 |
|  5 | Vladimir |    5 |
+----+----------+------+
3 rows in set (0.10 sec)
```

-SELECT ... FROM ... GROUP BY ...; 

```
mysql> SELECT num FROM testDelete GROUP BY num;
+------+
| num  |
+------+
|    2 |
|    3 |
|    5 |
|    7 |
+------+
4 rows in set (0.00 sec)
```

-SELECT ... FROM ... GROUP BY ... HAVING ...;

```
mysql> SELECT num FROM testDelete GROUP BY num HAVING num >= 5;
+------+
| num  |
+------+
|    5 |
|    7 |
+------+
2 rows in set (0.01 sec)

```

-SELECT ... FROM ... ORDER BY ... ;

```
mysql> SELECT name,num FROM testDelete ORDER BY name;
+----------+------+
| name     | num  |
+----------+------+
| Anatoliy |    3 |
| Anatoliy |    3 |
| Bred     |    2 |
| Bred     |    2 |
| Serg     |    7 |
| Vladimir |    5 |
| Vladimir |    5 |
+----------+------+
7 rows in set (0.00 sec)
```

-UPDATE ... SET ...;

```
mysql> UPDATE testDelete SET name = "Valerii" , num = 77;
Query OK, 7 rows affected (0.12 sec)
Rows matched: 7  Changed: 7  Warnings: 0

mysql> SELECT * FROM testDelete ;
+----+---------+------+
| id | name    | num  |
+----+---------+------+
|  1 | Valerii |   77 |
|  2 | Valerii |   77 |
|  3 | Valerii |   77 |
|  4 | Valerii |   77 |
|  5 | Valerii |   77 |
|  6 | Valerii |   77 |
|  7 | Valerii |   77 |
+----+---------+------+
7 rows in set (0.00 sec)
```

-TRUNCATE ... ;

```
mysql> TRUNCATE testDelete;
Query OK, 0 rows affected (0.33 sec)

mysql> SELECT * FROM testDelete ;
Empty set (0.00 sec)

```

-DROP TABLE ... ;

```
mysql> drop table testDelete;
Query OK, 0 rows affected (0.18 sec)

```

-rename
-ALTER TABLE ... CHANGE ... ... (datatype);

```
mysql> ALTER TABLE films CHANGE id id_films int(15);
Query OK, 3 rows affected (1.83 sec)
Records: 3  Duplicates: 0  Warnings: 0

```
-ALTER TABLE ... ADD COLUMN ... ... (datatype);

```
mysql> ALTER TABLE films ADD COLUMN genre_id INT(15);
Query OK, 0 rows affected (0.88 sec)
Records: 0  Duplicates: 0  Warnings: 0

```


## JOINS

```
mysql> select * from actors;
+-----------+-----------+----------+-----+
| id_actors | firstname | lastname | age |
+-----------+-----------+----------+-----+
|         1 | Jackie    | Chan     |  67 |
|         2 | Sylvester | Stallone |  25 |
|         3 | Jason     | Statham  |  25 |
|         4 | Clint     | Eastwood |  91 |
+-----------+-----------+----------+-----+
4 rows in set (0.00 sec)

mysql> select * from films;
+----+---------------------------------+----------+
| id | title                           | genre_id |
+----+---------------------------------+----------+
|  1 | Gran Torino                     |        2 |
|  2 | Il buono, il brutto, il cattivo |        3 |
|  3 | Trouble with the Curve          |        4 |
|  4 | Lord of the rings               |        5 |
+----+---------------------------------+----------+
4 rows in set (0.00 sec)


mysql> select * from genre;
+----------+-----------+
| id_genre | genre     |
+----------+-----------+
|        1 | horror    |
|        2 | action    |
|        3 | western   |
|        4 | advanture |
|        5 | fantasy   |
|        6 | western   |
+----------+-----------+
6 rows in set (0.01 sec)

mysql> select * from genre_films;
+----+----------+---------+
| id | genre_id | film_id |
+----+----------+---------+
|  1 |        1 |       0 |
|  2 |        2 |       1 |
|  3 |        3 |       2 |
|  4 |        4 |       3 |
|  5 |        5 |       4 |
+----+----------+---------+
5 rows in set (0.00 sec)

```

-INNER JOIN
> SELECT ... FROM ... INNER JOIN ... ON (table1.column = table2.column);
```
mysql> select title,genre from films inner join genre ON (films.genre_id = genre.id_genre);
+---------------------------------+-----------+
| title                           | genre     |
+---------------------------------+-----------+
| Gran Torino                     | action    |
| Il buono, il brutto, il cattivo | western   |
| Trouble with the Curve          | advanture |
| Lord of the rings               | fantasy   |
+---------------------------------+-----------+
4 rows in set (0.01 sec)

```

-LEFT JOIN
>SELECT ... FROM ... LEFT JOIN ... ON (table1.column = table2.column);
```
mysql> select genre,title from genre left join films ON (genre.id_genre = films.genre_id);
+-----------+---------------------------------+
| genre     | title                           |
+-----------+---------------------------------+
| action    | Gran Torino                     |
| western   | Il buono, il brutto, il cattivo |
| advanture | Trouble with the Curve          |
| fantasy   | Lord of the rings               |
| horror    | NULL                            |
+-----------+---------------------------------+
5 rows in set (0.00 sec)
```

-RIGHT JOIN
>SELECT ... FROM ... RIGHT JOIN ... ON (table1.column = table2.column);
```
mysql> select title,genre from films right join genre ON (genre.id_genre = films.genre_id);
+---------------------------------+-----------+
| title                           | genre     |
+---------------------------------+-----------+
| Gran Torino                     | action    |
| Il buono, il brutto, il cattivo | western   |
| Trouble with the Curve          | advanture |
| Lord of the rings               | fantasy   |
| NULL                            | horror    |
+---------------------------------+-----------+

```

___

# Famyli tree

```
mysql> select * from peoples;
+----+------+---------------------+
| id | pid  | fullname            |
+----+------+---------------------+
|  1 |    2 | Semen Petrovich     |
|  2 |    3 | Pert Valilievich    |
|  3 |    4 | Vasilii Fedorovich  |
|  4 |    0 | Fedor Alexandrovich |
+----+------+---------------------+
4 rows in set (0.00 sec)


mysql> select p1.fullname as child, 
p2.fullname as parent, 
p3.fullname as grandfather, 
p4.fullname as great_grandfather
from people p1 
inner join people p2 ON (p1.pid = p2.id) 
inner join people p3 on (p2.pid = p3.id) 
inner join people p4 on (p3.pid = p4.id);

+-----------------+------------------+--------------------+---------------------+
| child           | parent           | grandfather        | great_grandfather   |
+-----------------+------------------+--------------------+---------------------+
| Semen Petrovich | Petr Valilievich | Vasilii Fedorovich | Fedor Alexandrovich |
+-----------------+------------------+--------------------+---------------------+
1 row in set (0.00 sec)


```



