<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_093251_comments extends Migration
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
            '{{%comments}}',
            [
                'id'=> $this->primaryKey(11),
                'comment'=> $this->text()->notNull(),
                'comment_by'=> $this->integer(11)->notNull(),
                'blog_id'=> $this->integer(11)->notNull(),
                'created_at'=> $this->timestamp()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
            ],$tableOptions
        );
        $this->createIndex('comment_by','{{%comments}}',['comment_by'],false);
        $this->createIndex('blog_id','{{%comments}}',['blog_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('comment_by', '{{%comments}}');
        $this->dropIndex('blog_id', '{{%comments}}');
        $this->dropTable('{{%comments}}');
    }
}
