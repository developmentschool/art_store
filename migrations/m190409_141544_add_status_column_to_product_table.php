<?php

use yii\db\Migration;

/**
 * Handles adding status to table `{{%product}}`.
 */
class m190409_141544_add_status_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            '{{%product}}',
            'status',
            $this->smallInteger()->notNull()->defaultValue(10)->after('category_id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%product}}', 'status');
    }
}
