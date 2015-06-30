<?php
$con=mysql_connect("localhost","root","0000") or die('Error with MySQL connection');
mysql_query("SET NAMES 'utf8'");
mysql_select_db("Project");
$sql = "SELECT * FROM `DS18B20` ORDER BY  `measurement_id` DESC LIMIT 1 ";
$result = mysql_query($sql) or die('MySQL query error');
 
while($row = mysql_fetch_array($result)){
        echo $row['value'];
    }



