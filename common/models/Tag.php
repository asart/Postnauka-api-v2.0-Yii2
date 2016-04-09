<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property integer $id
 * @property string $eng
 * @property string $rus
 * @property string $desc
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property PostTag[] $postTags
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eng', 'created_at', 'updated_at'], 'required'],
            [['desc'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['eng'], 'string', 'max' => 255],
            [['rus'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'eng' => 'Eng',
            'rus' => 'Rus',
            'desc' => 'Desc',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostTags()
    {
        return $this->hasMany(PostTag::className(), ['tag_id' => 'id']);
    }
}
