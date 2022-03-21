<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_093252_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_comments_comment_by',
            '{{%comments}}','comment_by',
            '{{%user}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_comments_blog_id',
            '{{%comments}}','blog_id',
            '{{%blog}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_comments_comment_by', '{{%comments}}');
        $this->dropForeignKey('fk_comments_blog_id', '{{%comments}}');
    }
}
