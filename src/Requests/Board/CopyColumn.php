<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Copy column
 *
 * Copies a specific column. The ID of the board and the ID of the column must be specified.
 */
class CopyColumn extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
