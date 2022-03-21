<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_092416_section_content extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%section_content}}',
            [
                'id'=> $this->primaryKey(11),
                'page_name'=> $this->string(255)->notNull(),
                'slug'=> $this->string(255)->notNull(),
                'status'=> $this->tinyInteger(1)->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%section_content}}');
    }
}
