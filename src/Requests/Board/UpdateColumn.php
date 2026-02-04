<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update column
 *
 * Updates a specific column. The ID of the board and the ID of the column must be specified.
 */
class UpdateColumn extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}/columns/{$this->columnId}";
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 */
	public function __construct(
		protected string $boardId,
		protected string $columnId,
	) {
	}
}
