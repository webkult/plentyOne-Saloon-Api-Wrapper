<?php

namespace PlentyOne\Api\Requests\Misc;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getRestTodoById
 */
class GetRestTodoById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/todo/{$this->id}";
	}


	public function __construct()
	{
	}
}
