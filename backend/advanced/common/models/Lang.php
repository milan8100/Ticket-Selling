<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lang".
 *
 * @property int $id
 * @property int $artist_id
 * @property int $movie_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $is_active
 */
class Lang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['artist_id', 'movie_id', 'name', 'is_active'], 'required'],
            [['artist_id', 'movie_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['is_active'], 'string'],
            [['name'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'artist_id' => 'Artist ID',
            'movie_id' => 'Movie ID',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_active' => 'Is Active',
        ];
    }
}
