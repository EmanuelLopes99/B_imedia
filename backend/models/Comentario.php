<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentario".
 *
 * @property int $id
 * @property string $nome
 * @property string $comentario
 * @property string $data
 * @property int $id_blog
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'comentario', 'id_blog'], 'required'],
            [['comentario'], 'string'],
            [['data'], 'safe'],
            [['id_blog'], 'integer'],
            [['nome'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'comentario' => 'Comentario',
            'data' => 'Data',
            'id_blog' => 'Id Blog',
        ];
    }
}
