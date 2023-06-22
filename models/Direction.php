<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "direction".
 *
 * @property int $id
 * @property string $name
 */
class Direction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'direction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'match', 'pattern'=>'/^[А-ЯЁа-яё]/u', 'message'=>'Используйте только русские буквы'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }
}
