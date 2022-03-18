<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string $comment
 * @property int $comment_by
 * @property int $blog_id
 * @property string $created_at
 *
 * @property Blog $blog
 * @property User $commentBy
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment', 'comment_by', 'blog_id'], 'required'],
            [['comment'], 'string'],
            [['comment_by', 'blog_id'], 'integer'],
            [['created_at'], 'safe'],
            [['comment_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['comment_by' => 'id']],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['blog_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment' => 'Comment',
            'comment_by' => 'Comment By',
            'blog_id' => 'Blog ID',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Blog]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'blog_id']);
    }

    /**
     * Gets query for [[CommentBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommentBy()
    {
        return $this->hasOne(User::className(), ['id' => 'comment_by']);
    }
}
