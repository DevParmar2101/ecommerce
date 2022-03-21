<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_093208_blog extends Migration
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
            '{{%blog}}',
            [
                'id'=> $this->primaryKey(11),
                'blog_name'=> $this->string(255)->notNull(),
                'content'=> $this->text()->notNull(),
                'slug'=> $this->string(255)->notNull(),
                'category_id'=> $this->integer(11)->notNull(),
                'created_at'=> $this->timestamp()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'created_by'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('created_by','{{%blog}}',['created_by'],false);
        $this->createIndex('category_id','{{%blog}}',['category_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('created_by', '{{%blog}}');
        $this->dropIndex('category_id', '{{%blog}}');
        $this->dropTable('{{%blog}}');
    }
}
