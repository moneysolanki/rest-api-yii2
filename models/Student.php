<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $roll_no
 * @property string $name
 * @property int $phone_number
 * @property string $created_at
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone_number'], 'required'],
            [['phone_number'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'roll_no' => 'Roll No',
            'name' => 'Name',
            'phone_number' => 'Phone Number',
            'created_at' => 'Created At',
        ];
    }
}
