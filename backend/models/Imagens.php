<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "imagens".
 *
 * @property int $id
 * @property string $images
 */
class Imagens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imagens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['images'], 'required'],
            [['images'], 'string', 'max' => 255],
            [['images'],'file','extensions' => 'png,jpg,gif', 'maxFiles' => 5, 'skipOnEmpty' => false],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'images' => 'Images',
        ];
    }
}
