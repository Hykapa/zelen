<?php
namespace app\models;

use yii\db\ActiveRecord;

class BookIssue extends ActiveRecord
{
    public $book_id;
    public $client_id;
    public $employee_id;
    public $issue_date;
    public $return_date;

    public static function tableName()
    {
        return 'book_issues';
    }

    public function rules()
    {
        return [
            [['book_id', 'client_id', 'employee_id', 'issue_date', 'return_date'], 'required'],
        ];
    }
}