<?php

namespace vendor\dinhtrung\project\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\dinhtrung\project\models\Billingcode;

/**
 * BillingcodeSearch represents the model behind the search form about `vendor\dinhtrung\project\models\Billingcode`.
 */
class BillingcodeSearch extends Model
{
    public $id;
    public $name;
    public $value;
    public $desc;
    public $status;
    public $company_id;

    public function rules()
    {
        return [
            [['id', 'status', 'company_id'], 'integer'],
            [['name', 'desc'], 'safe'],
            [['value'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'value' => 'Value',
            'desc' => 'Desc',
            'status' => 'Status',
            'company_id' => 'Company ID',
        ];
    }

    public function search($params)
    {
        $query = Billingcode::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $this->addCondition($query, 'id');
        $this->addCondition($query, 'name', true);
        $this->addCondition($query, 'value');
        $this->addCondition($query, 'desc', true);
        $this->addCondition($query, 'status');
        $this->addCondition($query, 'company_id');
        return $dataProvider;
    }

    protected function addCondition($query, $attribute, $partialMatch = false)
    {
        if (($pos = strrpos($attribute, '.')) !== false) {
            $modelAttribute = substr($attribute, $pos + 1);
        } else {
            $modelAttribute = $attribute;
        }

        $value = $this->$modelAttribute;
        if (trim($value) === '') {
            return;
        }
        if ($partialMatch) {
            $query->andWhere(['like', $attribute, $value]);
        } else {
            $query->andWhere([$attribute => $value]);
        }
    }
}
