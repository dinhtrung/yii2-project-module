<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "user_preferences".
 *
 * @property string $pref_user
 * @property string $pref_name
 * @property string $pref_value
 */
class UserPreferences extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_preferences';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pref_user'], 'string', 'max' => 12],
            [['pref_name'], 'string', 'max' => 72],
            [['pref_value'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pref_user' => \Yii::t('vendor/dinhtrung/project/UserPreferences', 'Pref User'),
            'pref_name' => \Yii::t('vendor/dinhtrung/project/UserPreferences', 'Pref Name'),
            'pref_value' => \Yii::t('vendor/dinhtrung/project/UserPreferences', 'Pref Value'),
        ];
    }
}
