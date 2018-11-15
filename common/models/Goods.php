<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property int $id
 * @property int $typeid
 * @property string $goods
 * @property string $company
 * @property string $descr
 * @property double $price
 * @property string $picname
 * @property int $state
 * @property int $store
 * @property int $num
 * @property int $clicknum
 * @property int $addtime
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['typeid', 'state', 'store', 'num', 'clicknum', 'addtime'], 'integer'],
            [['descr'], 'string'],
            [['price'], 'number'],
            [['goods'], 'string', 'max' => 32],
            [['company'], 'string', 'max' => 50],
            [['picname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'typeid' => Yii::t('app', 'Typeid'),
            'goods' => Yii::t('app', 'Goods'),
            'company' => Yii::t('app', 'Company'),
            'descr' => Yii::t('app', 'Descr'),
            'price' => Yii::t('app', 'Price'),
            'picname' => Yii::t('app', 'Picname'),
            'state' => Yii::t('app', 'State'),
            'store' => Yii::t('app', 'Store'),
            'num' => Yii::t('app', 'Num'),
            'clicknum' => Yii::t('app', 'Clicknum'),
            'addtime' => Yii::t('app', 'Addtime'),
        ];
    }
}
