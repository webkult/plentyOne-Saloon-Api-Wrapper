<?php

namespace PlentyOne\Api\Requests\Todo;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a list of todos
 *
 * Creates a list of new todo.
 */
class CreateListOfTodos extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/todo";
	}


	public function __construct()
	{
	}
}
