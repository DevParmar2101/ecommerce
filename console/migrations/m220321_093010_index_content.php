<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_093010_index_content extends Migration
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
            '{{%index_content}}',
            [
                'id'=> $this->primaryKey(11),
                'banner_title'=> $this->string(255)->notNull(),
                'banner_sub_title'=> $this->string(255)->notNull(),
                'banner_button_title'=> $this->string(125)->notNull(),
                'banner_image'=> $this->string(255)->notNull(),
                'section_one_title'=> $this->string(255)->notNull(),
                'section_two_title'=> $this->string(255)->notNull(),
                'section_three_title'=> $this->string(255)->notNull(),
                'section_content_one_id'=> $this->integer(11)->notNull(),
                'section_content_two_id'=> $this->integer(11)->notNull(),
                'section_content_three_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('section_content_one_id','{{%index_content}}',['section_content_one_id'],false);
        $this->createIndex('section_content_two_id','{{%index_content}}',['section_content_two_id'],false);
        $this->createIndex('section_content_three_id','{{%index_content}}',['section_content_three_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('section_content_one_id', '{{%index_content}}');
        $this->dropIndex('section_content_two_id', '{{%index_content}}');
        $this->dropIndex('section_content_three_id', '{{%index_content}}');
        $this->dropTable('{{%index_content}}');
    }
}
