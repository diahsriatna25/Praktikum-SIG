<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table                = 'user';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['fullname', 'email', 'password'];

	public function getUsers($id = false){
		if($id == false) {
			return $this->findAll();
		}
		return $this->where(['id' => $id])->first();
	}
}

