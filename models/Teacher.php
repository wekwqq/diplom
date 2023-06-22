<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $id
 * @property string $fio
 * @property string $phone
 * @property string $email
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'phone', 'email'], 'required'],
            [['fio', 'phone', 'email'], 'string', 'max' => 255],
            [['phone'], 'match', 'pattern'=>'/^[0-9+()-]/u', 'message'=>'Доускается использование цифр и знаков "+, (, ), -"'],
            [['fio'], 'match', 'pattern'=>'/^[А-ЯЁа-яё]/u', 'message'=>'Используйте только русские буквы'],
            [['email'], 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Ф.И.О.',
            'phone' => 'Рабочий телефон',
            'email' => 'Рабочая почта',
        ];
    }
}
