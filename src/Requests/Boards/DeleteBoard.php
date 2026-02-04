<?php

namespace PlentyOne\Api\Requests\Boards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete board
 *
 * Deletes a specific board.  The ID of the board must be specified.
 */
class DeleteBoard extends Request
{
	protected Method $method = Method::DELETE;


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
