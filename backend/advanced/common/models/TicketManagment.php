<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ticket".
 *
 * @property int $id
 * @property int $user_id
 * @property int $movie_id
 * @property int $ticket_id
 * @property int $no_ticket
 * @property int $expire
 * @property int $payment_id
 * @property string $is_active
 * @property string $create_at
 * @property string $update_at
 * @property string $authKey
 */
class TicketManagment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ticket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'movie_id', 'ticket_id', 'no_ticket','payment_id', 'is_active', 'authKey'], 'required'],
            [['user_id', 'movie_id', 'ticket_id', 'no_ticket', 'payment_id'], 'integer'],
            [['is_active'], 'string'],
            [['create_at', 'update_at'], 'safe'],
            [['authKey'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'movie_id' => 'Movie ID',
            'ticket_id' => 'Ticket ID',
            'no_ticket' => 'No Ticket',
           
            'payment_id' => 'Payment ID',
            'is_active' => 'Is Active',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'authKey' => 'Auth Key',
        ];
    }
    
}
