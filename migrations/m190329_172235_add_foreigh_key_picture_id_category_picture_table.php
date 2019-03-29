<?php

use yii\db\Migration;

/**
 * Class m190329_172235_add_foreigh_key_picture_id_category_picture_table
 */
class m190329_172235_add_foreigh_key_picture_id_category_picture_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_category_picture_picture_id', 'category_picture', 'picture_id', 'picture', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_category_picture_picture_id', 'category_picture');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190329_172235_add_foreigh_key_picture_id_category_picture_table cannot be reverted.\n";

        return false;
    }
    */
}
