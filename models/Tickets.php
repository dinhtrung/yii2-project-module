<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "tickets".
 *
 * @property string $ticket
 * @property integer $ticket_company
 * @property integer $ticket_project
 * @property string $author
 * @property string $recipient
 * @property string $subject
 * @property integer $attachment
 * @property string $timestamp
 * @property string $type
 * @property string $assignment
 * @property string $parent
 * @property string $activity
 * @property integer $priority
 * @property string $cc
 * @property string $body
 * @property string $signature
 */
class Tickets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tickets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ticket_company', 'ticket_project', 'attachment', 'timestamp', 'assignment', 'parent', 'activity', 'priority'], 'integer'],
            [['body'], 'required'],
            [['body', 'signature'], 'string'],
            [['author', 'recipient', 'subject'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 15],
            [['cc'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ticket' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Ticket'),
            'ticket_company' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Ticket Company'),
            'ticket_project' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Ticket Project'),
            'author' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Author'),
            'recipient' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Recipient'),
            'subject' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Subject'),
            'attachment' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Attachment'),
            'timestamp' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Timestamp'),
            'type' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Type'),
            'assignment' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Assignment'),
            'parent' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Parent'),
            'activity' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Activity'),
            'priority' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Priority'),
            'cc' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Cc'),
            'body' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Body'),
            'signature' => \Yii::t('vendor/dinhtrung/project/Tickets', 'Signature'),
        ];
    }
}
