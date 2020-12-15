<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vocation}}`.
 */
class m200728_124630_create_vocation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vocation}}', [
            'id' => $this->primaryKey(),
            'worker_id' => $this->integer(),
            'department_id' => $this->integer(),
            'position_id' => $this->integer(),
            'vocation_list_id' => $this->integer(),
            'month' => $this->integer(),
            'day_begin' => $this->integer(),
            'day_end' => $this->integer(),
            'go' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vocation}}');
    }
}
