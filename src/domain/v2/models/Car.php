<?php

namespace yii2module\profile\domain\v2\models;

use yii\db\ActiveRecord;

class Car extends ActiveRecord
{

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%user_car}}';
	}
	
}
