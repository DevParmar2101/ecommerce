<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car_brands".
 *
 * @property int $id
 * @property string $brand_name
 * @property string $brand_slug
 * @property string $brand_logo
 * @property int $status
 * @property string $created_at
 * @property int $created_by
 *
 * @property User $createdBy
 */
class CarBrands extends \yii\db\ActiveRecord
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
        return 'car_brands';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_name', 'brand_slug', 'brand_logo', 'status', 'created_by'], 'required'],
            [['status', 'created_by'], 'integer'],
            [['created_at'], 'safe'],
            [['brand_name', 'brand_slug', 'brand_logo'], 'string', 'max' => 255],
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
            'brand_name' => 'Brand Name',
            'brand_slug' => 'Brand Slug',
            'brand_logo' => 'Brand Logo',
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
            CarBrands::ACTIVE => CarBrands::STATUS_ACTIVE,
            CarBrands::INACTIVE => CarBrands::STATUS_INACTIVE,
            ];
    }
}
