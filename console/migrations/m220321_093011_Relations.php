<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_093011_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_index_content_section_content_one_id',
            '{{%index_content}}','section_content_one_id',
            '{{%section_content}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_index_content_section_content_two_id',
            '{{%index_content}}','section_content_two_id',
            '{{%section_content}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_index_content_section_content_three_id',
            '{{%index_content}}','section_content_three_id',
            '{{%section_content}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_index_content_section_content_one_id', '{{%index_content}}');
        $this->dropForeignKey('fk_index_content_section_content_two_id', '{{%index_content}}');
        $this->dropForeignKey('fk_index_content_section_content_three_id', '{{%index_content}}');
    }
}
