<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "homelogo".
 *
 * @property int $id
 * @property int $logo
 */
class Homelogo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homelogo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logos'], 'required'],
            [['logos'], 'string'],
            [['logos'],'file', 'extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logos' => 'Logo',
        ];
    }
}
