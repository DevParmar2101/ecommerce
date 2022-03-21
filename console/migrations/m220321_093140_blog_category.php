<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_093140_blog_category extends Migration
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
            '{{%blog_category}}',
            [
                'id'=> $this->primaryKey(11),
                'name'=> $this->string(255)->notNull(),
                'slug'=> $this->string(255)->notNull(),
                'status'=> $this->tinyInteger(1)->notNull(),
                'created_at'=> $this->timestamp()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'created_by'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('created_by','{{%blog_category}}',['created_by'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('created_by', '{{%blog_category}}');
        $this->dropTable('{{%blog_category}}');
    }
}
