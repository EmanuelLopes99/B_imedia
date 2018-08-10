<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "design".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $imgD
 * @property string $data
 */
class Design extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'design';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'imgD'], 'required'],
            [['descricao'], 'string'],
            [['data'], 'safe'],
            [['nome'], 'string', 'max' => 200],
            [['imgD'], 'string', 'max' => 255],
            [['imgD'],'file','extensions' => 'png, jpg, gif'],
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
            'imgD' => 'Imagem',
            'data' => 'Data',
        ];
    }
}
