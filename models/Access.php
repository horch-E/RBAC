<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "access".
 *
 * @property integer $id
 * @property string $title
 * @property string $urls
 * @property integer $status
 * @property string $created_time
 * @property string $updated_time
 */
class Access extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'access';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'urls', 'created_time', 'updated_time'], 'required'],
            [['status'], 'integer'],
            [['created_time', 'updated_time'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['urls'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'urls' => 'Urls',
            'status' => 'Status',
            'created_time' => 'Created Time',
            'updated_time' => 'Updated Time',
        ];
    }
}
