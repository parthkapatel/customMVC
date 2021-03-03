<?php


namespace parthkapatel\phpmvc\db;


use http\Params;
use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\Model;

abstract class DbModel extends Model
{

    abstract public function tableName() : string;
    abstract  public function attributes() : array;
    abstract  public function primaryKey() : string;

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

    public function findOne($where){
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("And" ,array_map(fn($attr) => "$attr = :$attr",$attributes));
        $statement = self::prepare("select * from $tableName where $sql ");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key",$item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }

    public function update($field,$id){
        $tableName = $this->tableName();
        $attributes = array_keys($field);
        $sql = implode(" , " ,array_map(fn($attr) => "$attr = :$attr",$attributes));
        $statement = self::prepare("update $tableName set  $sql where id = :id");
        /*print_r($statement);*/
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute",$this->{$attribute});
        }
        $statement->bindValue(":id",$id);
       // print_r($statement);
        $statement->execute();
        return true;
    }

    public function delete($id)
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $statement = self::prepare("delete from $tableName where id=:id");
        $statement->bindValue(":id",$id);
        $statement->execute();
        return true;
    }
}