<?php

use yii\db\Migration;

/**
 * Class m191127_153855_add_foreigh_key
 */
class m191127_153855_add_foreigh_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fx_task_user1', 'task', ['executor_id'], 'user', ['id']);
        $this->addForeignKey('fx_task_user2', 'task', ['creator_id'], 'user', ['id']);
        $this->addForeignKey('fx_task_user3', 'task', ['updater_id'], 'user', ['id']);
        $this->addForeignKey('fx_project_user1', 'project', ['creator_id'], 'user', ['id']);
        $this->addForeignKey('fx_project_user2', 'project', ['updater_id'], 'user', ['id']);
        $this->addForeignKey('fx_projectuser_user1', 'project_user', ['user_id'], 'user', ['id']);
        $this->addForeignKey('fx_projectuser_user2', 'project_user', ['project_id'], 'project', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fx_task_user1', 'task');
        $this->dropForeignKey('fx_task_user2', 'task');
        $this->dropForeignKey('fx_task_user3', 'task');
        $this->dropForeignKey('fx_project_user1', 'project');
        $this->dropForeignKey('fx_project_user2', 'project');
        $this->dropForeignKey('fx_projectuser_user1', 'project_user');
        $this->dropForeignKey('fx_projectuser_user2', 'project_user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191127_153855_add_foreigh_key cannot be reverted.\n";

        return false;
    }
    */
}
