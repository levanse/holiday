<?php

use yii\db\Migration;

/**
 * Class m200803_131753_add_foreign_key_to_vocation
 */
class m200803_131753_add_foreign_key_to_vocation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-vocation-worker_id',
            'vocation',
            'worker_id',
            'worker',
            'id',
            'CASCADE',
            'RESTRICT'
        );
        $this->addForeignKey(
            'fk-vocation-department_id',
            'vocation',
            'department_id',
            'department',
            'id'
        );
        $this->addForeignKey(
            'fk-vocation-position_id',
            'vocation',
            'position_id',
            'position',
            'id'
        );
        $this->addForeignKey(
            'fk-vocation-vocation_list_id',
            'vocation',
            'vocation_list_id',
            'vocation_list',
            'id'
        );

        $this->createIndex(
            'idx-vocation-worker_id',
            'vocation',
            [
                'worker_id',
                'month',
                'day_begin',
                'day_end',
                'go'
            ], true
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-vocation-worker_id', 'vocation');
        $this->dropForeignKey('fk-vocation-department_id', 'vocation');
        $this->dropForeignKey('fk-vocation-position_id', 'vocation');
        $this->dropForeignKey('fk-vocation-vocation_list_id', 'vocation');
        $this->dropIndex('idx-vocation-worker_id', 'vocation');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200803_131753_add_foreign_key_to_vocation cannot be reverted.\n";

        return false;
    }
    */
}
