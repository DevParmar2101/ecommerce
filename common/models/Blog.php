<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $blog_name
 * @property string $image
 * @property string $content
 * @property string $slug
 * @property int $category_id
 * @property string $created_at
 * @property int $created_by
 * @property int $status
 *
 * @property BlogCategory $category
 * @property Comments[] $comments
 * @property User $createdBy
 */
class Blog extends \yii\db\ActiveRecord
{
    const ACTIVE = 1;
    const INACTIVE = 0;
    const STATUS_ACTIVE = 'Active';
    const STATUS_INACTIVE = 'Inactive';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['blog_name', 'image', 'content', 'slug', 'category_id', 'created_by'], 'required'],
            [['content'], 'string'],
            [['category_id', 'created_by', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['blog_name', 'image', 'slug'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => BlogCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'blog_name' => 'Blog Name',
            'image' => 'Image',
            'content' => 'Content',
            'slug' => 'Slug',
            'category_id' => 'Category',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'status' => 'Status'
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(BlogCategory::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['blog_id' => 'id']);
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
    public function getCategoryID()
    {
        $model = ArrayHelper::map(BlogCategory::find()->where(['status' => BlogCategory::ACTIVE])->all(),'id','name');

        return $model;
    }
    public function getStatus()
    {
        return [
            Blog::ACTIVE => Blog::STATUS_ACTIVE,
            Blog::INACTIVE => Blog::STATUS_INACTIVE,
        ];
    }
}
