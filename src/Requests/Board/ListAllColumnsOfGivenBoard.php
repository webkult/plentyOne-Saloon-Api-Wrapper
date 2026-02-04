<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all columns of a given board
 *
 * Lists all columns of a given board. The ID of the board must be specified.
 */
class ListAllColumnsOfGivenBoard extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}/columns";
	}


	/**
	 * @param string $boardId The ID of the board
	 */
	public function __construct(
		protected string $boardId,
	) {
	}
}
