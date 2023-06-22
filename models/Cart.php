<?php

namespace app\models;

use Yii;
use app\models\User;
use app\models\Lesson;

/**
 * This is the model class for table "cart".
 *
 * @property int $id
 * @property int $userid
 * @property int $lessonid
 * @property int $count
 *
 * @property Lesson $lesson
 * @property User $user
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userid', 'lessonid', 'count'], 'required'],
            [['userid', 'lessonid', 'count'], 'integer'],
            [['lessonid'], 'exist', 'skipOnError' => true, 'targetClass' => Lesson::class, 'targetAttribute' => ['lessonid' => 'id']],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['userid' => 'id']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор записи',
            'userid' => 'Пользователь',
            'lessonid' => 'Занятие',
            'count' => 'Количество записей',
        ];
    }

    /**
     * Gets query for [[Lesson]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLesson()
    {
        return $this->hasOne(Lesson::class, ['id' => 'lessonid']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'userid']);
    }
}
