<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "outros".
 *
 * @property int $id
 * @property string $criatividade
 * @property string $solucoes
 * @property string $desc_equipe
 */
class Outros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'outros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['criatividade', 'solucoes', 'desc_equipe'], 'required'],
            [['criatividade', 'solucoes', 'desc_equipe'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'criatividade' => 'Criatividade',
            'solucoes' => 'Solucões',
            'desc_equipe' => 'Desc Equipe',
        ];
    }
}
