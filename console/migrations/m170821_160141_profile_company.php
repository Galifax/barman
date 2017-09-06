<?php

use yii\db\Migration;

class m170821_160141_profile_company extends Migration
{
    public function up()
    {
        $this->createTable('{{%profile_company}}', [
                'id' => $this->integer(11),
                'avatar' => $this->string(255),
                'name' => $this->string(255),
                'born' => $this->date()->notNull(),
                'category' => $this->string(255),
                'about_me' => $this->string(1000),
                'from' => $this->string(255),
                'contacts' => $this->string(255),

            ]);

        $this->createIndex('id', '{{%profile_company}}', 'id');
        $this->addForeignKey('user_company_fk', '{{%profile_company}}', 'id', '{{%user}}', 'id', 'CASCADE');
        $this->addPrimaryKey('id_company_fk', '{{%profile_company}}', 'id');
    }

    public function down()
    {
        echo "m170821_160141_profile_company cannot be reverted.\n";

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
