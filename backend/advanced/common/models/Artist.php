<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "artist".
 *
 * @property int $id
 * @property int $category_id
 * @property int $language_id
 * @property int $location_id
 * @property int $movie_id
 * @property string $name
 * @property string $pic
 * @property string $is_active
 * @property string $create_at
 * @property string $update_at
 */
class Artist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'language_id', 'location_id', 'movie_id', 'name', 'is_active'], 'required'],
            [['category_id', 'language_id', 'location_id', 'movie_id'], 'integer'],
            [['is_active'], 'string'],
            [['create_at', 'update_at'], 'safe'],
            [['name'], 'string', 'max' => 25],
            [['pic'],'file','extensions'=>'jpeg,jpg,png,gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'language_id' => 'Language ID',
            'location_id' => 'Location ID',
            'movie_id' => 'Movie ID',
            'name' => 'Name',
            'pic' => 'Pic',
            'is_active' => 'Is Active',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
