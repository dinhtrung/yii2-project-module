<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "forum_watch".
 *
 * @property string $user
 * @property string $forum
 * @property string $topic
 */
class ForumWatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forum_watch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'forum', 'topic'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user' => \Yii::t('vendor/dinhtrung/project/ForumWatch', 'User'),
            'forum' => \Yii::t('vendor/dinhtrung/project/ForumWatch', 'Forum'),
            'topic' => \Yii::t('vendor/dinhtrung/project/ForumWatch', 'Topic'),
        ];
    }
}
