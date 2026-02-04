<?php

namespace PlentyOne\Api\Requests\Todo;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a list of tasks
 *
 * Updates a list of tasks.
 */
class UpdateListOfTasks extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/todo";
	}


	public function __construct()
	{
	}
}
