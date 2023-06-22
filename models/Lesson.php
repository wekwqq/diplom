<?php

namespace app\models;

use Yii;
use app\models\Direction;
use app\models\Teacher;

/**
 * This is the model class for table "lesson".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $directionid
 * @property int $teacherid
 * @property int $count
 * 
 * @property Cart[] $carts
 * @property User[] $users
 */
class Lesson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lesson';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'directionid', 'teacherid',  'description'], 'required'],
            [['directionid', 'teacherid', 'count'], 'integer'],
            [['image'], 'file', 'extensions' => ['png', 'jpg','gif'],'skipOnEmpty' => false ],
            [['name'], 'string', 'max' => 255],
            [['name'], 'match', 'pattern'=>'/^[А-ЯЁа-яё]/u', 'message'=>'Используйте только русские буквы'],
            [['description'], 'match', 'pattern'=>'/^[А-ЯЁа-яё]/u', 'message'=>'Используйте только русские буквы'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
           // 'id' => 'ID',
            'image' => 'Изображение',
            'name' => 'Название',
            'directionid' => 'Направление',
            'description' => 'Количество групп',
            'teacherid' => 'Преподаватель',
            'count' => 'Количество мест',
        ];
    }

    public function getDirection()
    {
        return $this->hasOne(Direction::class, ['id' => 'directionid']);
    }

    public function getTeacher()
    {
        return $this->hasOne(Teacher::class, ['id' => 'teacherid']);
    }
}
