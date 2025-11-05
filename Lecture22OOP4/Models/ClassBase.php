<?php

    class Base
    {
        const HOST = 'localhost';
        const DB_USER = 'root';
        const DB_PASSWORD = "";
        const DB_NAME = 'web_shop';
        public $connection;

        public function __construct()
        {
            $this->connection = mysqli_connect(self::HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);
        }


    }
