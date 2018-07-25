<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipe".
 *
 * @property int $id
 * @property string $nome
 * @property string $funcao
 * @property string $foto
 */
class Equipe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'funcao', 'foto'], 'required'],
            [['nome', 'funcao'], 'string', 'max' => 200],
            [['foto'], 'string', 'max' => 255],
            [['foto'],'file','extensions' => 'png, jpg, gif'],
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
            'funcao' => 'Função',
            'foto' => 'Foto',
        ];
    }
}
