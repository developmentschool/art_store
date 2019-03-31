<?php

use yii\db\Migration;

/**
 * Class m190331_101407_rename_category_picture_table
 */
class m190331_101407_rename_category_picture_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('{{%category_picture}}', '{{%cp}}');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameTable('{{%cp}}', '{{%category_picture}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190331_101407_rename_category_picture_table cannot be reverted.\n";

        return false;
    }
    */
}
