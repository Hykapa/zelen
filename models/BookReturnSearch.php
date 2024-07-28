<?php
namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class BookReturnSearch extends Model
{
    public $book_id;
    public $client_id;
    public $employee_id;
    public $return_date;
    public $book_condition;

    public function rules()
    {
        return [
            [['book_id', 'client_id', 'employee_id', 'return_date', 'book_condition'], 'afe'],
        ];
    }

    public function search($params)
    {
        $query = BookReturn::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'book_id' => $this->book_id,
            'client_id' => $this->client_id,
            'employee_id' => $this->employee_id,
            'eturn_date' => $this->return_date,
            'book_condition' => $this->book_condition,
        ]);

        return $dataProvider;
    }
}