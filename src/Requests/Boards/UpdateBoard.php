<?php

namespace PlentyOne\Api\Requests\Boards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update board
 *
 * Updates a specific board. The ID of the board must be specified.
 */
class UpdateBoard extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}";
	}


	/**
	 * @param string $boardId The ID of the board
	 */
	public function __construct(
		protected string $boardId,
	) {
	}
}
