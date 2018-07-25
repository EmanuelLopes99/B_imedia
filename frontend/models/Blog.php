<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id_blog
 * @property string $nome
 * @property string $categoria
 * @property string $descricao
 * @property string $post
 * @property string $data_blog
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'categoria', 'descricao', 'post'], 'required'],
            [['descricao'], 'string'],
            [['data_blog'], 'safe'],
            [['nome'], 'string', 'max' => 200],
            [['categoria'], 'string', 'max' => 100],
            [['post'], 'string', 'max' => 255],
            [['post'],'file','extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Blog',
            'nome' => 'Nome',
            'categoria' => 'Categória',
            'descricao' => 'Descrição',
            'post' => 'Post',
            'data_blog' => 'Data',
        ];
    }
}
