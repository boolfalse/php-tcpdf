<?php

$migrations = Array(
    Array(
        "table" => "users",
        "query" => "CREATE TABLE users (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, username VARCHAR(50) NOT NULL UNIQUE, password VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP);",
    ),
    Array(
        "table" => "templates",
        "query" => "CREATE TABLE templates ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, title VARCHAR(50) NOT NULL UNIQUE, content TEXT NOT NULL);",
    ),
);
