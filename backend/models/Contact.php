<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $assunto
 * @property string $sms
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
            [['nome', 'email', 'assunto', 'sms'], 'required'],
            [['sms'], 'string'],
            [['nome'], 'string', 'max' => 200],
            [['email', 'assunto'], 'string', 'max' => 100],
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
            'nome' => 'Nome',
            'email' => 'E-mail',
            'assunto' => 'Assunto',
            'sms' => 'Menssagem',
        ];
    }
}
