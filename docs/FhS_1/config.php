<?php
    define('servername' , 'localhost');
    define('username' , 'root');
    define('password' , '');
    define('dbname' , 'FhS');
    $conn = new mysqli(servername, username, password, dbname);
    
        /***CREATE TABLE IF NOT EXISTS login(
        username VARCHAR(20),
        password VARCHAR(20),
        age VARCHAR(20),
        city VARCHAR(20)) create table ***/
        $sql = "CREATE TABLE  IF NOT EXISTS login(
          id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
          username VARCHAR(50) NOT NULL UNIQUE,
          status int(2) NOT NULL,
          status1 VARCHAR(100) NOT NULL,
          city VARCHAR(50) NOT NULL,
          age INT(2) NOT NULL,
          email VARCHAR(100) NOT NULL UNIQUE,
          password1 CHAR(32) NOT NULL,    
          role INT(1) NOT NULL,
          created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
          updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      );";
    $retval = mysqli_query( $conn,$sql );
    if(! $retval ) echo('Could not create table: ');
    else  echo "";
    $sql = "CREATE TABLE  IF NOT EXISTS orders(
      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
      status INT(2) NOT NULL,
      status1 VARCHAR(100) NOT NULL,
        username VARCHAR(50) NOT NULL,
        driver VARCHAR(50) ,
        servic VARCHAR(50) NOT NULL,
        car VARCHAR(50) NOT NULL,
        numcar INT(2) NOT NULL,
        phone INT(2) NOT NULL,
        city VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      );";
    $retval = mysqli_query( $conn,$sql );
    if(! $retval ) echo('Could not create table: ');
    else  echo "";
    
?>