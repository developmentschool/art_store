<?php

use yii\db\Migration;

/**
 * Class m190409_163422_add_foreigh_key_user_id_user_addresess
 */
class m190409_163422_add_foreigh_key_user_id_user_addresess extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_user_id_user_addresses', 'user_addresses', 'user_id', 'users', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_user_id_user_addresses', 'user_addresses');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190409_163422_add_foreigh_key_user_id_user_addresess cannot be reverted.\n";

        return false;
    }
    */
}
