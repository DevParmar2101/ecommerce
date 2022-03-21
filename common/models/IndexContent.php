<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "index_content".
 *
 * @property int $id
 * @property string $banner_title
 * @property string $banner_sub_title
 * @property string $banner_button_title
 * @property string $banner_image
 * @property string $section_one_title
 * @property string $section_two_title
 * @property string $section_three_title
 * @property int $section_content_one_id
 * @property int $section_content_two_id
 * @property int $section_content_three_id
 */
class IndexContent extends \yii\db\ActiveRecord
{
    const FIRST_ID = 1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'index_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['banner_title', 'banner_sub_title', 'banner_button_title', 'banner_image', 'section_one_title', 'section_two_title', 'section_three_title', 'section_content_one_id', 'section_content_two_id', 'section_content_three_id'], 'required'],
            [['section_content_one_id', 'section_content_two_id', 'section_content_three_id'], 'integer'],
            [['banner_title', 'banner_sub_title', 'banner_image', 'section_one_title', 'section_two_title', 'section_three_title'], 'string', 'max' => 255],
            [['banner_button_title'], 'string', 'max' => 125],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'banner_title' => 'Banner Title',
            'banner_sub_title' => 'Banner Sub Title',
            'banner_button_title' => 'Banner Button Title',
            'banner_image' => 'Banner Image',
            'section_one_title' => 'Section One Title',
            'section_two_title' => 'Section Two Title',
            'section_three_title' => 'Section Three Title',
            'section_content_one_id' => 'Section Content One ID',
            'section_content_two_id' => 'Section Content Two ID',
            'section_content_three_id' => 'Section Content Three ID',
        ];
    }
    public function getSection()
    {
        $section = ArrayHelper::map(SectionContent::find()->where(['status' => SectionContent::ACTIVE])->all(),'id','slug');

        return $section;

    }
}
