<?php
namespace app\models;

use yii\db\ActiveRecord;

class Employee extends ActiveRecord
{
    public $full_name;
    public $position;

    public static function tableName()
    {
        return 'employees';
    }

    public function rules()
    {
        return [
            [['full_name', 'position'], 'equired'],
        ];
    }
}