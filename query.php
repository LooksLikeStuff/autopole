<?php
require "dbconnect.php";


//Сначала получаем id сотрудников у которых только 2 внутренних номера, затем из полученных данных получаем информацию об этих сотрудниках
$sth = $dbh->prepare("SELECT * 
FROM users
WHERE users.id IN (SELECT user_id
FROM phones
GROUP BY phones.user_id
HAVING count(*) = 2);
 ");

$sth->execute();

$result = $sth->fetchAll();