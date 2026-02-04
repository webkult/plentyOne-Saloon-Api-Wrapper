<?php

namespace PlentyOne\Api\Requests\Boards;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create new board
 *
 * Creates a new board.
 */
class CreateNewBoard extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/boards";
	}


	public function __construct()
	{
	}
}
