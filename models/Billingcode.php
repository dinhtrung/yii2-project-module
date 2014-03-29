<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "billingcode".
 *
 * @property string $id
 * @property string $name
 * @property double $value
 * @property string $desc
 * @property integer $status
 * @property string $company_id
 */
class Billingcode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'billingcode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'number'],
            [['status', 'company_id'], 'integer'],
            [['name'], 'string', 'max' => 25],
            [['desc'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Billingcode', 'ID'),
            'name' => \Yii::t('vendor/dinhtrung/project/Billingcode', 'Name'),
            'value' => \Yii::t('vendor/dinhtrung/project/Billingcode', 'Value'),
            'desc' => \Yii::t('vendor/dinhtrung/project/Billingcode', 'Desc'),
            'status' => \Yii::t('vendor/dinhtrung/project/Billingcode', 'Status'),
            'company_id' => \Yii::t('vendor/dinhtrung/project/Billingcode', 'Company ID'),
        ];
    }
}
