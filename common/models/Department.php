<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $info
 *
 * @property Vocation[] $vocations
 */
class Department extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'info'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Отдел',
            'info' => 'Info',
        ];
    }

    /**
     * Gets query for [[Vocations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVocations()
    {
        return $this->hasMany(Vocation::className(), ['department_id' => 'id']);
    }
}
