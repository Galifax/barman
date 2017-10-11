<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $avatar
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $born
 * @property string $category
 * @property integer $status
 * @property string $about_me
 * @property string $from
 * @property string $contacts
 *
 * @property User $id0
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'born'], 'required'],
            [['id', 'status', 'gender'], 'integer'],
            [['born'], 'safe'],
            [['avatar', 'name', 'surname', 'patronymic', 'category', 'from', 'contacts'], 'string', 'max' => 255],
            [['about_me'], 'string', 'max' => 1000],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'avatar' => 'Avatar',
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'born' => 'Born',
            'category' => 'Category',
            'gender' => 'Gender',
            'status' => 'Status',
            'about_me' => 'About Me',
            'from' => 'From',
            'contacts' => 'Contacts',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
    public function getSelection()
    {
        return $this->hasOne(Selection::className(), ['id' => 'id']);
    }
    

}
