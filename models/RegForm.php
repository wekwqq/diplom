<?php

namespace app\models;

class RegForm extends User
{
    public $confirm_password;
    public $agree;
    public function rules()
    {
        return [
            [['name', 'surname','age', 'login', 'parent_fio','email', 'parent_phone','password', 'confirm_password', 'agree'], 'required'],
            [['parent_fio'], 'match', 'pattern'=>'/^[А-ЯЁа-яё]/u', 'message'=>'Используйте только русские буквы'],
            [['parent_phone'], 'match', 'pattern'=>'/^[0-9+()-]/u', 'message'=>'Доускается использование цифр и знаков "+, (, ), -"'],
            [['name'], 'match', 'pattern'=>'/^[А-ЯЁа-яё]{2,}/u', 'message'=>'Используйте минимум 2 русских буквы'],
            [['surname'], 'match', 'pattern'=>'/^[А-ЯЁа-яё]{2,}/u', 'message'=>'Используйте минимум 2 русских буквы'],
            [['patronymic'], 'match', 'pattern'=>'/^[А-ЯЁа-яё]{5,}/u', 'message'=>'Используйте минимум 5 русских букв'],
            [['login'], 'match', 'pattern'=>'/^[A-Za-z0-9.]{4,}/', 'message'=>'Используйте минимум 4 латинских букв и цифр'],
            [['password'], 'match', 'pattern'=>'/^[A-Za-z0-9]{5,}/', 'message'=>'Используйте минимум 5 латинских букв и цифр'],
            [['age'], 'match', 'pattern'=>'/^[0-9]{1,2}/u', 'message'=>'Используйте минимум 1 цифру'],
            [['email'], 'email'],
            [['confirm_password'], 'compare', 'compareAttribute'=>'password'],
            [['login', 'email'], 'unique'],
            [['agree'], 'compare', 'compareValue'=>true, 'message'=>''],
            [['name', 'surname', 'patronymic', 'login', 'email', 'password'], 'string', 'max' => 255],
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
            'confirm_password' => 'Повторите пароль',
            'agree' => 'Подтвердите согласие на обработку персональных данных',
           // 'admin' => 'Admin',
 ];
 }
}