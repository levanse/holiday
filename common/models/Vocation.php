<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "vocation".
 *
 * @property int $id
 * @property int|null $worker_id
 * @property int|null $department_id
 * @property int|null $position_id
 * @property int|null $vocation_list_id
 * @property string|null $month
 * @property int|null $day_begin
 * @property int|null $day_end
 * @property int|null $go
 *
 * @property Department $department
 * @property Position $position
 * @property VocationList $vocationList
 * @property Worker $worker
 */

class Vocation extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vocation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worker_id', 'department_id', 'position_id', 'vocation_list_id', 'day_begin', 'day_end', 'go'], 'integer'],
            [['month'], 'string', 'max' => 255],
            [['worker_id', 'month', 'day_begin', 'day_end', 'go'], 'unique', 'targetAttribute' => ['worker_id', 'month', 'day_begin', 'day_end', 'go']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['position_id' => 'id']],
            [['vocation_list_id'], 'exist', 'skipOnError' => true, 'targetClass' => VocationList::className(), 'targetAttribute' => ['vocation_list_id' => 'id']],
            [['worker_id'], 'exist', 'skipOnError' => true, 'targetClass' => Worker::className(), 'targetAttribute' => ['worker_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Ф.И.О.',
            'department_id' => 'Отдел',
            'position_id' => 'Должность',
            'vocation_list_id' => 'Отпуск',
            'month' => 'Месяц',
            'day_begin' => 'Начало отпуска',
            'day_end' => 'Конец отпуска',
            'go' => 'Использован',
        ];
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    /**
     * Gets query for [[Position]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }

    /**
     * Gets query for [[VocationList]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVocationList()
    {
        return $this->hasOne(VocationList::className(), ['id' => 'vocation_list_id']);
    }

    /**
     * Gets query for [[Worker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Worker::className(), ['id' => 'worker_id']);
    }
}
