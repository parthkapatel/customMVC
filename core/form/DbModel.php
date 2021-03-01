<?php


namespace app\core\form;


use app\core\Application;
use app\core\Model;

abstract class DbModel extends Model
{

    abstract public function tableName() : string;
    abstract  public function attributes() : array;

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr",$attributes);
        $statement = self::prepare("insert into $tableName (".implode(',',$attributes).") values (".implode(',',$params).") ");
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute",$this->{$attribute});
        }
        $statement->execute();
        return true;
    }

    public function prepare($sql){
        return Application::$app->db->pdo->prepare($sql);
    }
}