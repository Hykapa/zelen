<?php
namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class BookIssueSearch extends Model
{
    public $book_id;
    public $client_id;
    public $employee_id;
    public $issue_date;
    public $return_date;

    public function rules()
    {
        return [
            [['book_id', 'client_id', 'employee_id', 'issue_date', 'return_date'], 'afe'],
        ];
    }

    public function search($params)
    {
        $query = BookIssue::find();

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
            'issue_date' => $this->issue_date,
            'eturn_date' => $this->return_date,
        ]);

        return $dataProvider;
    }
}