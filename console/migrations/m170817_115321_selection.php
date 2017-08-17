<?php

use yii\db\Migration;

class m170817_115321_selection extends Migration
{
    public function up()
    {
         $this->createTable('{{%selection}}', [
                'id' => $this->primaryKey(11),
                'user_id' => $this->integer(11)->notNull(),
                'status' => $this->integer(11)->notNull(),


            ]);
        
        $this->createIndex('user_id', '{{%selection}}', 'user_id');
        $this->addForeignKey('selection_fk', '{{%selection}}', 'user_id', '{{%user}}', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m170817_115321_selection cannot be reverted.\n";

        return false;
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
