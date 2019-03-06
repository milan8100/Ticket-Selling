<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "venues".
 *
 * @property int $id
 * @property int $movie_id
 * @property int $venues_id
 * @property int $location_id
 * @property string $name
 * @property string $venue_pic
 * @property string $location
 * @property string $is_active
 * @property string $create_at
 * @property string $update_at
 */
class Venues extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'venues';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['movie_id', 'venues_id', 'location_id', 'name', 'location', 'is_active'], 'required'],
            [['movie_id', 'venues_id', 'location_id'], 'integer'],
            [['is_active'], 'string'],
            [['create_at', 'update_at'], 'safe'],
            [['name', 'location'], 'string', 'max' => 25],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'movie_id' => 'Movie ID',
            'venues_id' => 'Venues ID',
            'location_id' => 'Location ID',
            'name' => 'Name',
            
            'location' => 'Location',
            'is_active' => 'Is Active',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
