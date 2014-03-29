<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $order_by
 * @property string $title
 * @property string $birthday
 * @property string $job
 * @property string $company
 * @property string $department
 * @property string $type
 * @property string $email
 * @property string $email2
 * @property string $url
 * @property string $phone
 * @property string $phone2
 * @property string $fax
 * @property string $mobile
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $jabber
 * @property string $icq
 * @property string $msn
 * @property string $yahoo
 * @property string $aol
 * @property string $notes
 * @property integer $project
 * @property string $icon
 * @property string $owner
 * @property integer $private
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthday'], 'safe'],
            [['department', 'notes'], 'string'],
            [['project', 'owner', 'private'], 'integer'],
            [['first_name', 'last_name', 'order_by', 'phone', 'phone2', 'fax', 'mobile', 'city', 'state', 'country', 'aol'], 'string', 'max' => 30],
            [['title'], 'string', 'max' => 50],
            [['job', 'email', 'email2', 'url', 'jabber', 'msn', 'yahoo'], 'string', 'max' => 255],
            [['company'], 'string', 'max' => 100],
            [['type', 'icq', 'icon'], 'string', 'max' => 20],
            [['address1', 'address2'], 'string', 'max' => 60],
            [['zip'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Contacts', 'ID'),
            'first_name' => \Yii::t('vendor/dinhtrung/project/Contacts', 'First Name'),
            'last_name' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Last Name'),
            'order_by' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Order By'),
            'title' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Title'),
            'birthday' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Birthday'),
            'job' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Job'),
            'company' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Company'),
            'department' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Department'),
            'type' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Type'),
            'email' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Email'),
            'email2' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Email2'),
            'url' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Url'),
            'phone' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Phone'),
            'phone2' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Phone2'),
            'fax' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Fax'),
            'mobile' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Mobile'),
            'address1' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Address1'),
            'address2' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Address2'),
            'city' => \Yii::t('vendor/dinhtrung/project/Contacts', 'City'),
            'state' => \Yii::t('vendor/dinhtrung/project/Contacts', 'State'),
            'zip' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Zip'),
            'country' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Country'),
            'jabber' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Jabber'),
            'icq' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Icq'),
            'msn' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Msn'),
            'yahoo' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Yahoo'),
            'aol' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Aol'),
            'notes' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Notes'),
            'project' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Project'),
            'icon' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Icon'),
            'owner' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Owner'),
            'private' => \Yii::t('vendor/dinhtrung/project/Contacts', 'Private'),
        ];
    }
}
