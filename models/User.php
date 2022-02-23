<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\web\UploadedFile;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $role
 * @property string $image
 * @property string $username
 * @property string $password
 * @property string $setting
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email',  'username', 'password', ], 'required'],
            [['role', ], 'integer'],
            [['setting',], 'string'],
            [['role'],'default','value'=>'0'],
            ['image','default','value'=>'default.jpg'],
            [['name', 'email', 'image', 'username'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'email' => 'Эл-почта',
            'role' => 'Рол',
            'image' => 'Расм',
            'username' => 'Логин',
            'password' => 'Парол',
            'setting' => 'Setting',
        ];
    }






    public function upload($old = null){
        if($this->image = UploadedFile::getInstance($this,'image')){
            $name = microtime(true).'.'.$this->image->extension;
            $this->image->saveAs(Yii::$app->basePath.'/web/profile/'.$name);
            $this->image = $name;
            return true;
        }else{
            if($old != null){
                $this->image = $old;
                return true;
            }else{
                $this->image = "default.png";
                return true;
            }

        }
    }

    public function encrypt(){
        $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        return true;
    }



    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username'=>$username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->password;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->password === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        //return Yii::$app->getSecurity()->validatePassword($password,$this->password);
        return $password===$this->password;
    }

}
