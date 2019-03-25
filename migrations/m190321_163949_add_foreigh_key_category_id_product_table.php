<?php

use yii\db\Migration;

/**
 * Class m190321_163949_add_foreigh_key_category_id_product_table
 */
class m190321_163949_add_foreigh_key_category_id_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_product_category_id', 'product', 'category_id', 'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_product_category_id', 'product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190321_163949_add_foreigh_key_category_id_product_table cannot be reverted.\n";

        return false;
    }
    */
}
