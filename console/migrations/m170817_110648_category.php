<?php

use yii\db\Migration;

class m170817_110648_category extends Migration
{
    public function up()
    {
        $this->createTable('{{%category}}', [
                'id' => $this->primaryKey(11),
                'parent_id' => $this->integer(11),
                'name' => $this->string(255)->notNull(),
            ]);
        
        $this->createIndex('parent_id', '{{%category}}', 'parent_id');
        $this->addForeignKey('category_fk', '{{%category}}', 'parent_id', '{{%category}}', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m170817_110648_category cannot be reverted.\n";

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
