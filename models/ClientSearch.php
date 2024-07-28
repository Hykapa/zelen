<?php
namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class ClientSearch extends Model
{
    public $full_name;
    public $passport_series;
    public $passport_number;

    public function rules()
    {
        return [
            [['full_name', 'passport_series', 'passport_number'], 'afe'],
        ];
    }

    public function search($params)
    {
        $query = Client::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'full_name' => $this->full_name,
            'passport_series' => $this->passport_series,
            'passport_number' => $this->passport_number,
        ]);

        return $dataProvider;
    }
}