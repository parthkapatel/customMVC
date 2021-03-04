<?php


namespace app\models;


use parthkapatel\phpmvc\ContactModel;
use parthkapatel\phpmvc\db\DbModel;

class ContactForms extends DbModel
{

    public string $subject = "";
    public string $email = "";
    public string $description = "";
    public function rules(): array
    {
        return [
            "subject" => [self::RULE_REQUIRED],
            "email" => [self::RULE_REQUIRED,self::RULE_EMAIL],
            "description" => [self::RULE_REQUIRED],
        ];
    }
    public function labels(): array
    {
        return [
            "subject" => "Enter Your Subject",
            "email" => "Enter Your Email",
            "description" => "Enter Your Description",
        ];
    }

    public function send(): bool
    {
        return parent::save();
    }

    public function attributes(): array
    {
        return ['subject','email','description'];
    }

    public function primaryKey(): string
    {
        return 'id';
    }

    public function tableName(): string
    {
        return 'contact';
    }
}