<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $ID
 * @property string $NAME
 */
class Product extends \yii\db\ActiveRecord
{
    public $viewed;
    public $allCategories;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_categorie'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['id_categorie'] , 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Ид',
            'name' => 'Имя',
            'viewed' => 'Просмотрено',
            'categorie.name' => 'Категория',
            'id_categorie' => 'Категория' 

        ];
    }


    public function getCategorie()
    {
        return $this->hasOne(Categorie::className(), ['id' => 'id_categorie']);
    }

}
