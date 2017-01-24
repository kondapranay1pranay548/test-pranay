<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sub_poojalu".
 *
 * @property integer $id
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_desc
 * @property string $slug
 * @property string $link
 * @property string $image
 * @property integer $icon
 * @property string $puja_name
 * @property integer $god_name
 * @property string $main_content
 * @property string $sub_content
 * @property string $side_content1
 * @property string $side_content2
 * @property integer $advance_price
 * @property integer $price_without_material
 * @property integer $price_with_material
 * @property integer $pooja_duration
 * @property integer $top_service_order
 * @property integer $status
 * @property string $audio_file
 * @property integer $cat_id
 * @property integer $astottaram_id
 * @property string $archana_name
 * @property string $archana_content
 * @property string $poojasamagri_name
 * @property string $poojasamagri_pdf
 * @property string $slokam_name
 * @property string $slokam_pdf
 * @property string $stotram_name
 * @property string $stotram_pdf
 * @property string $astottaram_name
 * @property string $astottaram_pdf
 * @property string $flower
 * @property integer $day
 * @property string $naivedyam
 * @property integer $master_id
 *
 * @property RemedialPuja[] $remedialPujas
 * @property MasterPoojalu $master
 */
class SubPoojalu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_poojalu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta_title', 'meta_keyword', 'meta_desc', 'slug', 'link', 'image', 'icon', 'puja_name', 'god_name', 'main_content', 'sub_content', 'side_content1', 'side_content2', 'advance_price', 'price_without_material', 'price_with_material', 'pooja_duration', 'top_service_order', 'status', 'audio_file', 'cat_id', 'astottaram_id', 'archana_name', 'archana_content', 'poojasamagri_name', 'poojasamagri_pdf', 'slokam_name', 'slokam_pdf', 'stotram_name', 'stotram_pdf', 'astottaram_name', 'astottaram_pdf', 'flower', 'day', 'naivedyam', 'master_id','popular_text'], 'required'],
            [['meta_title', 'meta_keyword', 'meta_desc', 'main_content', 'sub_content', 'side_content1', 'side_content2', 'archana_content', 'poojasamagri_pdf', 'slokam_pdf', 'stotram_pdf', 'astottaram_pdf'], 'string'],
            [['icon', 'god_name', 'advance_price', 'price_without_material', 'price_with_material', 'pooja_duration', 'top_service_order', 'status', 'cat_id', 'astottaram_id', 'day', 'master_id'], 'integer'],
            [['slug'], 'string', 'max' => 100],
            [['link', 'image', 'puja_name'], 'string', 'max' => 150],
            [['audio_file'], 'string', 'max' => 11],
            [['archana_name', 'poojasamagri_name', 'slokam_name', 'stotram_name', 'astottaram_name', 'flower', 'naivedyam'], 'string', 'max' => 50],
            [['master_id'], 'exist', 'skipOnError' => true, 'targetClass' => MasterPoojalu::className(), 'targetAttribute' => ['master_id' => 'id']],
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
            'meta_keyword' => 'Meta Keyword',
            'meta_desc' => 'Meta Desc',
            'slug' => 'Slug',
            'link' => 'Link',
            'image' => 'Image',
            'icon' => 'Icon',
            'puja_name' => 'Puja Name',
            'god_name' => 'God Name',
            'main_content' => 'Main Content',
            'sub_content' => 'Sub Content',
            'side_content1' => 'Side Content1',
            'side_content2' => 'Side Content2',
            'advance_price' => 'Advance Price',
            'price_without_material' => 'Price Without Material',
            'price_with_material' => 'Price With Material',
            'pooja_duration' => 'Pooja Duration',
            'top_service_order' => 'Top Service Order',
            'status' => 'Status',
            'audio_file' => 'Audio File',
            'cat_id' => 'Cat ID',
            'astottaram_id' => 'Astottaram ID',
            'archana_name' => 'Archana Name',
            'archana_content' => 'Archana Content',
            'poojasamagri_name' => 'Poojasamagri Name',
            'poojasamagri_pdf' => 'Poojasamagri Pdf',
            'slokam_name' => 'Slokam Name',
            'slokam_pdf' => 'Slokam Pdf',
            'stotram_name' => 'Stotram Name',
            'stotram_pdf' => 'Stotram Pdf',
            'astottaram_name' => 'Astottaram Name',
            'astottaram_pdf' => 'Astottaram Pdf',
            'flower' => 'Flower',
            'day' => 'Day',
            'naivedyam' => 'Naivedyam',
            'master_id' => 'Master ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemedialPujas()
    {
        return $this->hasMany(RemedialPuja::className(), ['sub_poojalu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaster()
    {
        return $this->hasOne(MasterPoojalu::className(), ['id' => 'master_id']);
    }
}
