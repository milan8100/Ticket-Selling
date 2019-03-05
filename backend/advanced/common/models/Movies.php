<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "movies".
 *
 * @property int $id
 * @property int $ticket_id
 * @property int $artist_id
 * @property int $category_id
 * @property int $language_id
 * @property int $location_id
 * @property resource $mv_pic
 * @property string $mv_category
 * @property string $mv_name
 * @property string $mv_art_name
 * @property string $mv_ticket
 * @property string $mv_language
 * @property string $mv_location
 * @property string $is_active
 * @property string $create_at
 * @property string $update_at
 *
 * @property Ticket $ticket
 */
class Movies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ticket_id', 'artist_id', 'category_id', 'language_id', 'location_id', 'mv_category', 'mv_name', 'mv_art_name', 'mv_ticket', 'mv_language', 'mv_location', 'is_active'], 'required'],
            [['ticket_id', 'artist_id', 'category_id', 'language_id', 'location_id'], 'integer'],
            [['is_active'], 'string'],
            [['create_at', 'update_at'], 'safe'],
            [['mv_pic'],'file','extensions'=>'jpeg,jpg,png,gif'],
            [['mv_category', 'mv_location'], 'string', 'max' => 11],
            [['mv_name', 'mv_art_name', 'mv_ticket'], 'string', 'max' => 15],
            [['mv_language'], 'string', 'max' => 25],
            [['ticket_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ticket::className(), 'targetAttribute' => ['ticket_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ticket_id' => 'Ticket ID',
            'artist_id' => 'Artist ID',
            'category_id' => 'Category ID',
            'language_id' => 'Language ID',
            'location_id' => 'Location ID',
            'mv_pic' => 'Mv Pic',
            'mv_category' => 'Mv Category',
            'mv_name' => 'Mv Name',
            'mv_art_name' => 'Mv Art Name',
            'mv_ticket' => 'Mv Ticket',
            'mv_language' => 'Mv Language',
            'mv_location' => 'Mv Location',
            'is_active' => 'Is Active',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicket()
    {
        return $this->hasOne(Ticket::className(), ['id' => 'ticket_id']);
    }
}
