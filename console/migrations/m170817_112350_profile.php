<?php

use yii\db\Migration;

class m170817_112350_profile extends Migration
{
    public function up()
    {
         $this->createTable('{{%profile}}', [
                'id' => $this->primaryKey(11),
                'user_id' => $this->integer(11)->notNull(),
                'avatar' => $this->string(255),
                'name' => $this->string(255)->notNull(),
                'surname' => $this->string(255)->notNull(),
                'patronymic' => $this->string(255),
                'born' => $this->date()->notNull(),
                'category' => $this->string(255)->notNull(),
                'status' => $this->integer(11)->notNull(),
                'about_me' => $this->string(1000),
                'from' => $this->string(255)->notNull(),
                'contacts' => $this->string(255),

            ]);

        $this->createIndex('user_id', '{{%profile}}', 'user_id');
        $this->addForeignKey('user_fk', '{{%profile}}', 'user_id', '{{%user}}', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m170817_112350_profile cannot be reverted.\n";

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
