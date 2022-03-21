<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_093141_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_blog_category_created_by',
            '{{%blog_category}}','created_by',
            '{{%user}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_blog_category_created_by', '{{%blog_category}}');
    }
}
