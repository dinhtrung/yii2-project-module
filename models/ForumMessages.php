<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "forum_messages".
 *
 * @property integer $id
 * @property integer $forum
 * @property integer $parent
 * @property integer $author
 * @property integer $editor
 * @property string $title
 * @property string $date
 * @property string $body
 * @property integer $published
 */
class ForumMessages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forum_messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['forum', 'parent', 'author', 'editor', 'published'], 'integer'],
            [['date'], 'safe'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/ForumMessages', 'ID'),
            'forum' => \Yii::t('vendor/dinhtrung/project/ForumMessages', 'Forum'),
            'parent' => \Yii::t('vendor/dinhtrung/project/ForumMessages', 'Parent'),
            'author' => \Yii::t('vendor/dinhtrung/project/ForumMessages', 'Author'),
            'editor' => \Yii::t('vendor/dinhtrung/project/ForumMessages', 'Editor'),
            'title' => \Yii::t('vendor/dinhtrung/project/ForumMessages', 'Title'),
            'date' => \Yii::t('vendor/dinhtrung/project/ForumMessages', 'Date'),
            'body' => \Yii::t('vendor/dinhtrung/project/ForumMessages', 'Body'),
            'published' => \Yii::t('vendor/dinhtrung/project/ForumMessages', 'Published'),
        ];
    }
}
