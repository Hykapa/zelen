<?php
namespace app\models;

use yii\db\ActiveRecord;

class Client extends ActiveRecord
{
    public $full_name;
    public $passport_series;
    public $passport_number;

    public static function tableName()
    {
        return 'clients';
    }

    public function rules()
    {
        return [
            [['full_name', 'passport_series', 'passport_number'], 'required'],
        ];
    }
}