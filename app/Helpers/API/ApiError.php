<?php

namespace App\Helpers\API;

class ApiError
{
	public static function errorMessage($message, $code)
	{
		return [
			'data' => [
				'msg' => $message,
				'code' => $code
			]
		];
	}
}