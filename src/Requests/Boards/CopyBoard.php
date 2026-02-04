<?php

namespace PlentyOne\Api\Requests\Boards;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Copy board
 *
 * Copies a specific board.  The ID of the board must be specified.
 */
class CopyBoard extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
