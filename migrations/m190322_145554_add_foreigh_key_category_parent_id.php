<?php

use yii\db\Migration;

/**
 * Class m190322_145554_add_foreigh_key_category_parent_id
 */
class m190322_145554_add_foreigh_key_category_parent_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_parent_category_id', 'category', 'parent_id', 'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_parent_category_id', 'category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190322_145554_add_foreigh_key_category_parent_id cannot be reverted.\n";

        return false;
    }
    */
}
