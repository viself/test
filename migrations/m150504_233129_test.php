<?php

use yii\db\Schema;
use yii\db\Migration;

class m150504_233129_test extends Migration
{
    public function up()
    {

      $this->createTable('product', array(
      'id' => Schema::TYPE_PK,
      'id_categorie' => Schema::TYPE_INTEGER,
      'name' => Schema::TYPE_STRING));

      $this->createTable('categorie', array(
      'id' => Schema::TYPE_PK,
      'name' => Schema::TYPE_STRING ));

      $this->createTable('viewed', array(
      'id' => Schema::TYPE_PK,
      'id_product' => Schema::TYPE_INTEGER));


      $this->addForeignKey('id_categorie','product','id_categorie','categorie','id','CASCADE','CASCADE');
      $this->addForeignKey('id_product','viewed','id_product','product','id','CASCADE','CASCADE');

    }

    public function down()
    {
      
        $this->dropTable('viewed');
        $this->dropTable('product');
        $this->dropTable('categorie');
        
    
        return true;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
