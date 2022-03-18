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
    const ACTIVE = 1;
    const INACTIVE = 2;
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'Inactive';
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
    public function getStatus()
    {
        return [
            SectionContent::ACTIVE => SectionContent::STATUS_ACTIVE,
            SectionContent::INACTIVE => SectionContent::STATUS_INACTIVE,
        ];
    }
}
