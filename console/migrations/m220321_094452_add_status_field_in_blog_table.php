<?php

use yii\db\Migration;

/**
 * Class m220321_094452_add_status_field_in_blog_table
 */
class m220321_094452_add_status_field_in_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220321_094452_add_status_field_in_blog_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220321_094452_add_status_field_in_blog_table cannot be reverted.\n";

        return false;
    }
    */
}
