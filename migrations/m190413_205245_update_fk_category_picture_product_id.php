<?php

use yii\db\Migration;

/**
 * Class m190413_205245_update_fk_category_picture_product_id
 */
class m190413_205245_update_fk_category_picture_product_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('fk_category_picture_product_id', 'cp');
        $this->addForeignKey('fk_category_picture_product_id', 'cp', 'product_id', 'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_category_picture_product_id', 'cp');
        $this->addForeignKey('fk_category_picture_product_id', 'cp', 'product_id', 'product', 'id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190413_205245_update_fk_category_picture_product_id cannot be reverted.\n";

        return false;
    }
    */
}
