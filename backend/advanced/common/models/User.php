<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $user_role_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property int $zipcode
 * @property string $country
 * @property string $comp_name
 * @property int $phno
 * @property string $comp_email
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $logo
 * @property string $is_active
 * @property string $create_at
 * @property string $update_at
 * @property string $username
 * @property string $authKey
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'password', 'zipcode', 'country', 'comp_name', 'phno', 'comp_email', 'address', 'city', 'state', 'logo', 'is_active', 'username', 'authKey'], 'required'],
            [['zipcode', 'phno'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['first_name', 'last_name', 'email', 'password', 'country', 'comp_name', 'city', 'state', 'is_active', 'username'], 'string', 'max' => 25],
            [['comp_email'], 'string', 'max' => 25],
            [['address', 'logo'], 'string', 'max' => 255],
            [['authKey'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'zipcode' => 'Zipcode',
            'country' => 'Country',
            'comp_name' => 'Comp Name',
            'phno' => 'Phno',
            'comp_email' => 'Comp Email',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'logo' => 'Logo',
            'is_active' => 'Is Active',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'username' => 'Username',
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
    
    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
        
    }
    public function validatePassword($password){
        return $this->password === $password;
    }
   
}