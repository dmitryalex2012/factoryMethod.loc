<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $comment
 * @property int $amount
 * @property int $status
 * @property string $created
 * @property string $updated
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'email', 'phone', 'address', 'comment', 'amount', 'status', 'created', 'updated'], 'required'],
            [['user_id', 'amount', 'status'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['name', 'email', 'phone'], 'string', 'max' => 50],
            [['address', 'comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'comment' => 'Comment',
            'amount' => 'Amount',
            'status' => 'Status',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
