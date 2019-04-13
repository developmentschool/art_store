<?php

use yii\db\Migration;

/**
 * Handles adding status to table `{{%category}}`.
 */
class m190413_150647_add_status_column_to_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            '{{%category}}',
            'status',
            $this->smallInteger()->notNull()->defaultValue(10)->after('parent_id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%category}}', 'status');
    }
}
