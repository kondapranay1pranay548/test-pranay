<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "horoscope".
 *
 * @property integer $id
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $title
 * @property integer $category
 * @property string $link
 * @property string $sub_name
 * @property string $file
 * @property string $content
 */
class Horoscope extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'horoscope';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta_title', 'meta_description', 'meta_keywords', 'title', 'category', 'link', 'sub_name', 'file', 'content'], 'required'],
            [['category'], 'integer'],
            [['content'], 'string'],
            [['meta_title', 'meta_description', 'meta_keywords'], 'string', 'max' => 500],
            [['title', 'link', 'sub_name'], 'string', 'max' => 150],
            [['file'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'title' => 'Title',
            'category' => 'Category',
            'link' => 'Link',
            'sub_name' => 'Sub Name',
            'file' => 'File',
            'content' => 'Content',
        ];
    }
}
