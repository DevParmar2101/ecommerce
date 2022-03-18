<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section_content".
 *
 * @property int $id
 * @property string $page_name
 * @property string $slug
 * @property int $status
 */
class SectionContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_name', 'slug', 'status'], 'required'],
            [['status'], 'integer'],
            [['page_name', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_name' => 'Page Name',
            'slug' => 'Slug',
            'status' => 'Status',
        ];
    }
}
