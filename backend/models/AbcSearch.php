<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Abc;

/**
 * AbcSearch represents the model behind the search form of `app\models\Abc`.
 */
class AbcSearch extends Abc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['missao', 'visao', 'valores', 'endereco', 'email', 'telefone'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Abc::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'missao', $this->missao])
            ->andFilterWhere(['like', 'visao', $this->visao])
            ->andFilterWhere(['like', 'valores', $this->valores])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telefone', $this->telefone]);

        return $dataProvider;
    }
}
