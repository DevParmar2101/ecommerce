<?php

use yii\db\Schema;
use yii\db\Migration;

class m220321_092813_car_brands extends Migration
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
            '{{%car_brands}}',
            [
                'id'=> $this->primaryKey(11),
                'brand_name'=> $this->string(255)->notNull(),
                'brand_slug'=> $this->string(255)->notNull(),
                'brand_logo'=> $this->string(255)->notNull(),
                'status'=> $this->tinyInteger(1)->notNull(),
                'created_at'=> $this->timestamp()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'created_by'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('created_by','{{%car_brands}}',['created_by'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('created_by', '{{%car_brands}}');
        $this->dropTable('{{%car_brands}}');
    }
}
