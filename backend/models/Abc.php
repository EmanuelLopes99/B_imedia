<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abc".
 *
 * @property int $id
 * @property string $missao
 * @property string $visao
 * @property string $valores
 * @property string $novidades
 * @property string $endereco
 * @property string $email
 * @property int $telefone
 */
class Abc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'abc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['missao', 'visao', 'valores', 'endereco', 'email', 'telefone'], 'required'],
            [['missao', 'visao', 'valores'], 'string'],
            [['telefone'], 'string', 'max' => 15],
            [['endereco', 'email'], 'string', 'max' => 100],
            ['email','email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'missao' => 'Missão',
            'visao' => 'Visão',
            'valores' => 'Valores',
            'endereco' => 'Endereço',
            'email' => 'E-mail',
            'telefone' => 'Telefone',
        ];
    }
}
