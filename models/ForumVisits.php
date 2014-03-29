<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "forum_visits".
 *
 * @property integer $user
 * @property integer $forum
 * @property integer $message
 * @property string $date
 */
class ForumVisits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forum_visits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'forum', 'message'], 'integer'],
            [['date'], 'required'],
            [['date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user' => \Yii::t('vendor/dinhtrung/project/ForumVisits', 'User'),
            'forum' => \Yii::t('vendor/dinhtrung/project/ForumVisits', 'Forum'),
            'message' => \Yii::t('vendor/dinhtrung/project/ForumVisits', 'Message'),
            'date' => \Yii::t('vendor/dinhtrung/project/ForumVisits', 'Date'),
        ];
    }
}
