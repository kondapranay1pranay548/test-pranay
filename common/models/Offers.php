<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "offers".
 *
 * @property integer $id
 * @property string $mtitle
 * @property string $mkeywords
 * @property string $mdesc
 * @property string $link
 * @property string $image
 * @property string $name
 * @property string $content
 * @property string $category
 * @property string $first_shortdesk
 * @property string $second_shortdesk
 * @property string $sub_name
 * @property string $mainpage_footer
 */
class Offers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mtitle', 'mkeywords', 'mdesc', 'image', 'name', 'content', 'category', 'first_shortdesk', 'second_shortdesk', 'sub_name', 'mainpage_footer'], 'required'],
            [['mkeywords', 'mdesc', 'link', 'content', 'category', 'mainpage_footer'], 'string'],
            [['mtitle'], 'string', 'max' => 300],
            [['image', 'name', 'sub_name'], 'string', 'max' => 800],
            [['first_shortdesk', 'second_shortdesk'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mtitle' => 'Mtitle',
            'mkeywords' => 'Mkeywords',
            'mdesc' => 'Mdesc',
            'link' => 'Link',
            'image' => 'Image',
            'name' => 'Name',
            'content' => 'Content',
            'category' => 'Category',
            'first_shortdesk' => 'First Shortdesk',
            'second_shortdesk' => 'Second Shortdesk',
            'sub_name' => 'Sub Name',
            'mainpage_footer' => 'Mainpage Footer',
        ];
    }
}
