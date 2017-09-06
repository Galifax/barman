<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profile_company".
 *
 * @property integer $id
 * @property string $avatar
 * @property string $name
 * @property string $born
 * @property string $category
 * @property string $about_me
 * @property string $from
 * @property string $contacts
 *
 * @property User $id0
 */
class ProfileCompany extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'born'], 'required'],
            [['id'], 'integer'],
            [['born'], 'safe'],
            [['avatar', 'name', 'category', 'from', 'contacts'], 'string', 'max' => 255],
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
            'born' => 'Born',
            'category' => 'Category',
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
