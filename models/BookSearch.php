<?php
namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class BookSearch extends Model
{
    public $name;
    public $article;
    public $receipt_date;
    public $author;

    public function rules()
    {
        return [
            [['name', 'article', 'receipt_date', 'author'], 'afe'],
        ];
    }

    public function search($params)
    {
        $query = Book::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'name' => $this->name,
            'article' => $this->article,
            'eceipt_date' => $this->receipt_date,
            'author' => $this->author,
        ]);

        return $dataProvider;
    }
}