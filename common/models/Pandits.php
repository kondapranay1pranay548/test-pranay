<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pandits".
 *
 * @property integer $id
 * @property string $name
 * @property string $sub_name
 * @property string $category
 * @property string $phone
 * @property string $email
 * @property string $city
 * @property string $content
 * @property string $image
 * @property string $mtitle
 * @property string $mkeywords
 * @property string $mdesc
 * @property string $link
 */
class Pandits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pandits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'sub_name', 'category', 'phone', 'email', 'city', 'content', 'image', 'mtitle', 'mkeywords', 'mdesc'], 'required'],
            [['category', 'city', 'content', 'mkeywords', 'mdesc', 'link'], 'string'],
            [['name', 'sub_name', 'image'], 'string', 'max' => 800],
            [['phone'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 1000],
            [['mtitle'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'sub_name' => 'Sub Name',
            'category' => 'Category',
            'phone' => 'Phone',
            'email' => 'Email',
            'city' => 'City',
            'content' => 'Content',
            'image' => 'Image',
            'mtitle' => 'Mtitle',
            'mkeywords' => 'Mkeywords',
            'mdesc' => 'Mdesc',
            'link' => 'Link',
        ];
    }
}
