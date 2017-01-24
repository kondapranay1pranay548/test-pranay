<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sub".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_cat
 * @property integer $status
 *
 * @property Cat $idCat
 */
class Sub extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_cat', 'status'], 'required'],
            [['id_cat', 'status'], 'integer'],
            [['name'], 'string', 'max' => 150],
            [['id_cat'], 'exist', 'skipOnError' => true, 'targetClass' => Cat::className(), 'targetAttribute' => ['id_cat' => 'id']],
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
            'id_cat' => 'Id Cat',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCat()
    {
        return $this->hasOne(Cat::className(), ['id' => 'id_cat']);
    }
}
