<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "panchamgam".
 *
 * @property integer $id
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_desc
 * @property string $panchamgam_data
 */
class Panchamgam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'panchamgam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta_title', 'meta_keywords', 'meta_desc', 'panchamgam_data'], 'required'],
            [['meta_keywords', 'meta_desc', 'panchamgam_data'], 'string'],
            [['meta_title'], 'string', 'max' => 300],
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
            'meta_keywords' => 'Meta Keywords',
            'meta_desc' => 'Meta Desc',
            'panchamgam_data' => 'Panchamgam Data',
        ];
    }
}
