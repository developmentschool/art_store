<?php

use yii\db\Migration;

/**
 * Class m190327_174452_add_foreigh_key_product_id_product_picture_table
 */
class m190327_174452_add_foreigh_key_product_id_product_picture_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_product_picture_product_id', 'product_picture', 'product_id', 'product', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_product_picture_product_id', 'product_picture');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190327_174452_add_foreigh_key_product_id_product_picture_table cannot be reverted.\n";

        return false;
    }
    */
}
