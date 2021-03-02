<?php

class m0001_initial{

    public function up()
    {
        $db = \parthkapatel\phpmvc\Application::$app->db;
        $SQL = "create table if not exists users(
                        id int auto_increment primary key,
                        email varchar(255) not null,
                        firstname varchar(255) not null,
                        lastname varchar(255) not null,
                        password varchar(512) not null,
                        status TINYINT DEFAULT 0 not null,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) engine=innodb;";
        $db->pdo->exec($SQL);
    }

    public function down(){
        $db = \parthkapatel\phpmvc\Application::$app->db;
        $sql = "drop table if exists users;";
        $db->pdo->exec($sql);
        echo "Down migration".PHP_EOL;
    }


}
