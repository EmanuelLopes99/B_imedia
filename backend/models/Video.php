<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $video
 * @property string $data
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'video'], 'required'],
            [['descricao'], 'string'],
            [['data'], 'safe'],
            [['nome'], 'string', 'max' => 200],
            [['video'], 'string', 'max' => 255],
            [['video'],'file', 'extensions' => 'mp4'],
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
            'descricao' => 'Descricao',
            'video' => 'Video',
            'data' => 'Data',
        ];
    }
}
