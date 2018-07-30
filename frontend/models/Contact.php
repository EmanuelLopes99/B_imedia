<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $endereco
 * @property string $email
 * @property int $telefone
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['endereco', 'email', 'telefone'], 'required'],
            [['telefone'], 'integer'],
            [['endereco'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'endereco' => 'Endereco',
            'email' => 'Email',
            'telefone' => 'Telefone',
        ];
    }
}
