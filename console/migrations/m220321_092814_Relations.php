<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_092814_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_car_brands_created_by',
            '{{%car_brands}}','created_by',
            '{{%user}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_car_brands_created_by', '{{%car_brands}}');
    }
}
