<?php

namespace frontend\models;


use Yii;

/**
 * This is the model class for table "remedial_puja".
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
 * @property integer $sub_poojalu_id
 *
 * @property SubPoojalu $subPoojalu
 */
class RemedialPuja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'remedial_puja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta_keyword', 'meta_title', 'meta_desc', 'icon', 'link', 'slug', 'image', 'puja_name', 'god_name', 'content', 'sub_poojalu_id'], 'required'],
            [['meta_keyword', 'meta_title', 'meta_desc', 'content'], 'string'],
            [['sub_poojalu_id'], 'integer'],
            [['icon', 'link', 'slug', 'image', 'puja_name', 'god_name'], 'string', 'max' => 150],
            [['sub_poojalu_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubPoojalu::className(), 'targetAttribute' => ['sub_poojalu_id' => 'id']],
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
            'sub_poojalu_id' => 'Sub Poojalu ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubPoojalu()
    {
        return $this->hasOne(SubPoojalu::className(), ['id' => 'sub_poojalu_id']);
    }
}
