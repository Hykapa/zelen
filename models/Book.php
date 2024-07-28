<?php
namespace app\models;

use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
    // public $name;
    // public $article;
    // public $receipt_date;
    // public $author;

    public static function tableName()
    {
        return 'books';
    }

    public function rules()
    {
        return [
            [['name', 'article', 'receipt_date', 'author'], 'required'],
        ];
    }
    public function beforeSave($insert)
    {
        echo 'beforeSave';
        exit;
    }
}