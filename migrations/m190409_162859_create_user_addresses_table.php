<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_addresses}}`.
 */
class m190409_162859_create_user_addresses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_addresses}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer()->notNull(),
            'city'=>$this->string(),
            'address'=>$this->string(255),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_addresses}}');
    }
}
