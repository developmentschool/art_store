<?php

use yii\db\Migration;

/**
 * Class m190410_114312_add_column_status_order_table
 */
class m190410_114312_add_column_status_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('orders', 'status', 'INTEGER AFTER shipment_addr');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('orders', 'status');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190410_114312_add_column_status_order_table cannot be reverted.\n";

        return false;
    }
    */
}
