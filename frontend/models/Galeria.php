<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galeria".
 *
 * @property int $id
 * @property string $fotografia
 * @property string $videos
 * @property string $projetos
 */
class Galeria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galeria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fotografia', 'videos', 'projetos'], 'required'],
            [['fotografia', 'videos', 'projetos'], 'string', 'max' => 255],
            [['fotografia'],'file','extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fotografia' => 'Fotografia',
            'videos' => 'Videos',
            'projetos' => 'Projetos',
        ];
    }
}
