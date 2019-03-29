<?php

use yii\db\Migration;

/**
 * Class m190327_175023_add_foreigh_key_picture_id_product_picture_table
 */
class m190327_175023_add_foreigh_key_picture_id_product_picture_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_product_picture_picture_id', 'product_picture', 'picture_id', 'picture', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_product_picture_picture_id', 'product_picture');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190327_175023_add_foreigh_key_picture_id_product_picture_table cannot be reverted.\n";

        return false;
    }
    */
}
