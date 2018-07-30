<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property int $id
 * @property string $missao
 * @property string $visao
 * @property string $valores
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['missao', 'visao', 'valores'], 'required'],
            [['missao', 'visao', 'valores'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'missao' => 'Missao',
            'visao' => 'Visao',
            'valores' => 'Valores',
        ];
    }
}
