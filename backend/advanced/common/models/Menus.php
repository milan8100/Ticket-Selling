<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menus".
 *
 * @property int $id
 * @property string $menuname
 * @property string $authKey
 */
class Menus extends \yii\db\ActiveRecord implements yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menuname', 'authKey'], 'required'],
            [['menuname'], 'string', 'max' => 25],
            [['authKey'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menuname' => 'Menuname',
            'authKey' => 'Auth Key',
        ];
    }
    
    public function getAuthKey(){
        return $this->authKey;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;
    }
    
    public static function findIdentity($id) {
        return self::findOne($id);
    }
    
    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\web\NotAcceptableHttpException();
    }
    
    
}
