<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_093209_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_blog_created_by',
            '{{%blog}}','created_by',
            '{{%user}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_blog_category_id',
            '{{%blog}}','category_id',
            '{{%blog_category}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_blog_created_by', '{{%blog}}');
        $this->dropForeignKey('fk_blog_category_id', '{{%blog}}');
    }
}
