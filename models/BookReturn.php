<?php
namespace app\models;

use yii\db\ActiveRecord;

class BookReturn extends ActiveRecord
{
    public $book_id;
    public $client_id;
    public $employee_id;
    public $return_date;
    public $book_condition;

    public static function tableName()
    {
        return 'book_returns';
    }

    public function rules()
    {
        return [
            [['book_id', 'client_id', 'employee_id', 'return_date', 'book_condition'], 'required'],
        ];
    }
}