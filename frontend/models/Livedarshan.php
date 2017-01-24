<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "livedarshan".
 *
 * @property integer $id
 * @property string $mtitle
 * @property string $mkeywords
 * @property string $mdesc
 * @property string $link
 * @property string $iframe
 * @property string $image
 * @property string $name
 * @property string $content
 * @property string $category
 * @property string $first_shortdesk
 * @property string $second_shortdesk
 * @property string $sub_name
 * @property string $mainpage_footer
 */
class Livedarshan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'livedarshan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mtitle', 'mkeywords', 'mdesc', 'iframe', 'image', 'name', 'content', 'category', 'first_shortdesk', 'second_shortdesk', 'sub_name', 'mainpage_footer'], 'required'],
            [['mkeywords', 'mdesc', 'link', 'iframe', 'content', 'category', 'mainpage_footer'], 'string'],
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
            'iframe' => 'Iframe',
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
