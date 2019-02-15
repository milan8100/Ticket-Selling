<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "language".
 *
 * @property int $id
 * @property int $artist_id
 * @property int $location_id
 * @property int $category_id
 * @property int $movie_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['artist_id', 'location_id', 'category_id', 'movie_id', 'name'], 'required'],
            [['artist_id', 'location_id', 'category_id', 'movie_id'], 'integer'],
            [['name'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
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
            'location_id' => 'Location ID',
            'category_id' => 'Category ID',
            'movie_id' => 'Movie ID',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
