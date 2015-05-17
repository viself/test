<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorie".
 *
 * @property integer $id
 * @property string $name
 */
class Categorie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 11]
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
        ];
    }

    public function findForDroplist() {

    	$allCategories = Categorie::find()->all();    
        $allCategoriesArr = array();

        foreach  ($allCategories as $categorie) { 
            $allCategoriesArr+=array($categorie->id => $categorie->name);
        }

        return $allCategoriesArr;

    }

}
