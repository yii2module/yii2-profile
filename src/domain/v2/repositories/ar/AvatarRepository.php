<?php

namespace yii2module\profile\domain\v2\repositories\ar;

use yii2lab\domain\repositories\ActiveArRepository;

class AvatarRepository extends ActiveArRepository {
	
	public $defaultName = 'default';
	
	public function tableName()
	{
		return 'profile_avatar';
	}
	
}