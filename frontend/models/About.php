<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $missao
 * @property string $filosofia
 * @property string $image
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['missao', 'filosofia', 'image'], 'required'],
            [['missao', 'filosofia'], 'string'],
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
            'missao' => 'Missão',
            'filosofia' => 'Filosofia',
            'image' => 'Image',
        ];
    }
}
