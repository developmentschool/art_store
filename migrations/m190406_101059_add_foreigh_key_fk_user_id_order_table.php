<?php

use yii\db\Migration;

/**
 * Class m190406_101059_add_foreigh_key_fk_user_id_order_table
 */
class m190406_101059_add_foreigh_key_fk_user_id_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_user_id_order_table', 'orders', 'user_id', 'users', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_user_id_order_table', 'orders');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190406_101059_add_foreigh_key_fk_user_id_order_table cannot be reverted.\n";

        return false;
    }
    */
}
