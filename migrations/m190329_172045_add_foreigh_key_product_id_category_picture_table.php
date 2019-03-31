<?php

use yii\db\Migration;

/**
 * Class m190329_172045_add_foreigh_key_product_id_category_picture_table
 */
class m190329_172045_add_foreigh_key_product_id_category_picture_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_category_picture_product_id', 'category_picture', 'product_id', 'product', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_category_picture_product_id', 'category_picture');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190329_172045_add_foreigh_key_product_id_category_picture_table cannot be reverted.\n";

        return false;
    }
    */
}
