<?php

namespace PlentyOne\Api\Requests\Todo;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of todos
 *
 * Deletes a list of todos.
 */
class DeleteListOfTodos extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/todo";
	}


	public function __construct()
	{
	}
}
