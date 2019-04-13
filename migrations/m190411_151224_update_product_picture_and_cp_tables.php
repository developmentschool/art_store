<?php

use yii\db\Migration;

/**
 * Class m190411_151224_update_product_picture_and_cp_tables
 */
class m190411_151224_update_product_picture_and_cp_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%product_picture}}', 'is_main', $this->boolean()->defaultValue(0));
        $this->alterColumn('{{%cp}}', 'is_main', $this->boolean()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%product_picture}}', 'is_main', $this->boolean()->notNull());
        $this->alterColumn('{{%cp}}', 'is_main', $this->boolean()->notNull());

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190411_151224_update_product_picture_and_cp_tables cannot be reverted.\n";

        return false;
    }
    */
}
