<?php

namespace frontend\models;
use frontend\models\SubPoojalu;
use yii\data\ActiveDataProvider;

use Yii;

/**
 * This is the model class for table "master_poojalu".
 *
 * @property integer $id
 * @property string $meta_keyword
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $icon
 * @property string $link
 * @property string $slug
 * @property string $image
 * @property string $puja_name
 * @property string $god_name
 * @property string $content
 * @property string $category
 *
 * @property SubPoojalu[] $subPoojalus
 */
class MasterPoojalu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_poojalu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta_keyword', 'meta_title', 'meta_desc', 'icon', 'link', 'slug', 'image', 'puja_name', 'god_name', 'content', 'category'], 'required'],
            [['meta_keyword', 'meta_title', 'meta_desc', 'content'], 'string'],
            [['icon', 'link'], 'string', 'max' => 250],
            [['slug', 'image', 'puja_name', 'god_name'], 'string', 'max' => 150],
            [['category'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meta_keyword' => 'Meta Keyword',
            'meta_title' => 'Meta Title',
            'meta_desc' => 'Meta Desc',
            'icon' => 'Icon',
            'link' => 'Link',
            'slug' => 'Slug',
            'image' => 'Image',
            'puja_name' => 'Puja Name',
            'god_name' => 'God Name',
            'content' => 'Content',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubPoojalus()
    {
        return $this->hasMany(SubPoojalu::className(), ['master_id' => 'id']);
    }
    public function getRemed()
    {
      return   $this->poojalus->remedialPujas;
    }
}
