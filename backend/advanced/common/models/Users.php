<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property int $user_id
 * @property string $user_role
 * @property string $created_at
 * @property string $updated_at
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'user_role'], 'required'],
            [['user_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['user_role'], 'string', 'max' => 15],
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
            'user_role' => 'User Role',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
