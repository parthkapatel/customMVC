<?php




class m0002_contact
{
    public function up()
    {
        $db = \parthkapatel\phpmvc\Application::$app->db;
        $SQL = "create table if not exists contact(
                        id int auto_increment primary key,
                        subject varchar(255) not null,
                        email varchar(255) not null,
                        description varchar(255) not null,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) engine=innodb;";
        $db->pdo->exec($SQL);
    }

    public function down(){
        $db = \parthkapatel\phpmvc\Application::$app->db;
        $sql = "drop table if exists contact;";
        $db->pdo->exec($sql);
        echo "Down migration".PHP_EOL;
    }

}