<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viewed".
 *
 * @property integer $ID
 * @property integer $ID_PRODUCT
 */
class Viewed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'viewed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_product'], 'required'],
            [['id', 'id_product'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_product' => 'Id  Product',
        ];
    }
}
