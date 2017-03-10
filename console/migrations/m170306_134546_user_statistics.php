<?php

use yii\db\Migration;

class m170306_134546_user_statistics extends Migration
{
    public function up()
    {
        $this->createTable('user_statistics', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(10)->notNull(),
            'plan' => $this->boolean()->defaultValue(0),
            'action' => $this->boolean()->defaultValue(0),
            'learning' => $this->boolean()->defaultValue(0),
            'exercises' => $this->boolean()->defaultValue(0),
            'relaxing' => $this->boolean()->defaultValue(0),
            'thinking' => $this->boolean()->defaultValue(0),
            'created_at' => $this->integer()->notNull()
        ]);

        $this->addForeignKey(
            'fk-user_statistics-user_id',
            'user_statistics',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('user_statistics');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
