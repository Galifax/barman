<?php

use yii\db\Migration;

class m170817_115321_selection extends Migration
{
    public function up()
    {
         $this->createTable('{{%selection}}', [
                'id' => $this->integer(11),
                'status' => $this->integer(11)->notNull(),


            ]);
        
        $this->createIndex('id', '{{%selection}}', 'id');
        $this->addForeignKey('selection_fk', '{{%selection}}', 'id', '{{%user}}', 'id', 'CASCADE');
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
