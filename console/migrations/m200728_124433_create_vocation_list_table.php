<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vocation_list}}`.
 */
class m200728_124433_create_vocation_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vocation_list}}', [
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
        $this->dropTable('{{%vocation_list}}');
    }
}
