<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string|null $patronymic
 * @property string $age
 * @property string $parent_fio
 * @property string $parent_phone
 * @property string $login
 * @property string $password
 * @property string $email
 * @property int $admin
 */
class User extends ActiveRecord implements IdentityInterface
{ 
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
     public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
     public function getId()
    {
        return $this->id;
    }
     public function getAuthKey()
    {
        return ;
    }
     public function validateAuthKey($authKey)
    {
        return ;
    }
     public function validatePassword($password)
     {
     return $this->password==$password;
     }

     public static function findByLogin($login)
     {
         return self::find()->where(['login' => $login])->one();
     }
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
            [['name', 'surname', 'age', 'parent_fio', 'parent_phone', 'login', 'password', 'email'], 'required'],
            [['admin'], 'integer'],
            [['name', 'surname', 'patronymic', 'age', 'parent_fio', 'parent_phone', 'login', 'password', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'age' => 'Возраст',
            'parent_fio' => 'ФИО родителя/опекуна',
            'parent_phone' => 'Телефон родителя/опекуна',
            'email' => 'Почта',
            'login' => 'Логин',
            'password' => 'Пароль',
            
           // 'admin' => 'Admin',
        ];
    }
}
