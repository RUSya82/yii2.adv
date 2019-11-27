<?php

use yii\db\Migration;

/**
 * Class m191127_150032_create_table_project_user
 */
class m191127_150032_create_table_project_user extends Migration
{
    public function safeUp()
    {
        $this->createTable('project_user', [
            'id'=>$this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'role' => 'ENUM("manager", "developer", "tester")'
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('project_user');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191127_150032_create_table_project_user cannot be reverted.\n";

        return false;
    }
    */
}
