<?php

use yii\db\Migration;

class m170817_112350_profile extends Migration
{
    public function up()
    {
         $this->createTable('{{%profile}}', [
                'id' => $this->integer(11),
                'avatar' => $this->string(255),
                'name' => $this->string(255),
                'surname' => $this->string(255),
                'patronymic' => $this->string(255),
                'born' => $this->date()->notNull(),
                'category' => $this->string(255),
                'status' => $this->integer(11),
                'about_me' => $this->string(1000),
                'from' => $this->string(255),
                'contacts' => $this->string(255),

            ]);

        $this->createIndex('id', '{{%profile}}', 'id');
        $this->addForeignKey('user_fk', '{{%profile}}', 'id', '{{%user}}', 'id', 'CASCADE');
        $this->addPrimaryKey('id_fk', '{{%profile}}', 'id');

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
