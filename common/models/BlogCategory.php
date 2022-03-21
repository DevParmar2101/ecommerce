<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog_category".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $status
 * @property string $created_at
 * @property int $created_by
 *
 * @property User $createdBy
 */
class BlogCategory extends \yii\db\ActiveRecord
{
    const ACTIVE = 1;
    const INACTIVE = 0;
    const STATUS_INACTIVE = 'Inactive';
    const STATUS_ACTIVE = 'Active';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'status', 'created_by'], 'required'],
            [['status', 'created_by'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
    public function getStatus()
    {
        return [
            BlogCategory::ACTIVE => BlogCategory::STATUS_ACTIVE,
            BlogCategory::INACTIVE => BlogCategory::STATUS_INACTIVE,
        ];
    }
}
