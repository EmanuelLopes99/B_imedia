<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fotografia".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $image
 * @property string $data
 */
class Fotografia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fotografia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'image'], 'required'],
            [['descricao'], 'string'],
            [['data'], 'safe'],
            [['nome'], 'string', 'max' => 200],
            [['image'], 'string', 'max' => 255],
            [['image'],'file','extensions' => 'png, jpg, gif'],
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
            'descricao' => 'Descrição',
            'image' => 'Image',
            'data' => 'Data',
        ];
    }
}
