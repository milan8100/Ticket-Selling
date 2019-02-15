<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $artist_id
 * @property int $movie_id
 * @property int $language_id
 * @property int $location_id
 * @property string $name
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['artist_id', 'movie_id', 'language_id', 'location_id', 'name'], 'required'],
            [['artist_id', 'movie_id', 'language_id', 'location_id'], 'integer'],
            [['name'], 'string'],
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
            'language_id' => 'Language ID',
            'location_id' => 'Location ID',
            'name' => 'Name',
        ];
    }
}
