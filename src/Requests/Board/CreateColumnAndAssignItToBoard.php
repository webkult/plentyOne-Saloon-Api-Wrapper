<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create column and assign it to a board
 *
 * Creates a new column and assigns it to a given board. The ID of the board must be specified.
 */
class CreateColumnAndAssignItToBoard extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
