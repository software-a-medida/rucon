<?php

defined('_EXEC') or die;

class Index_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function read_projects($featured = false)
	{
		$fields = [
			'token',
			'name',
			'cover'
		];

		if ($featured == true)
		{
			$query = Functions::decode_json_to_array($this->database->select('projects', $fields, [
				'featured' => true
			]));
		}
		else
			$query = Functions::decode_json_to_array($this->database->select('projects', $fields));

		return $query;
	}

	public function read_project($token)
	{
		$query = Functions::decode_json_to_array($this->database->select('business', '*', ['token' => $token]));

		return !empty($query) ? $query[0] : null;
	}
}
