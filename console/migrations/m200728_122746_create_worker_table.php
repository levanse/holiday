<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%worker}}`.
 */
class m200728_122746_create_worker_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%worker}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'info' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%worker}}');
    }
}
