<?php

use yii\db\Migration;

class m160409_134708_post_tag extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post_tag}}', [
            'id' => $this->primaryKey(),
            'tag_id' => $this->integer()->notNull(),
            'post_id' => $this->integer()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('tag_id' , 'post_tag' , 'tag_id' , 'tag' , 'id' , 'CASCADE', 'CASCADE');
        $this->addForeignKey('post_id' , 'post_tag' , 'post_id' , 'post' , 'id' , 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%post_tag}}');
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
