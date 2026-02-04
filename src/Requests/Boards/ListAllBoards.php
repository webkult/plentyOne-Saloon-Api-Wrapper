<?php

namespace PlentyOne\Api\Requests\Boards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all boards
 *
 * Gets a list with all boards.
 */
class ListAllBoards extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/boards";
	}


	public function __construct()
	{
	}
}
