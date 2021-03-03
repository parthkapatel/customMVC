<?php


namespace app\models;


use parthkapatel\phpmvc\ContactModel;

class ContactForms extends ContactModel
{

    public string $subject = "";
    public string $email = "";
    public string $description = "";
    public function rules(): array
    {
        return [
            "subject" => [self::RULE_REQUIRED],
            "email" => [self::RULE_REQUIRED],
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