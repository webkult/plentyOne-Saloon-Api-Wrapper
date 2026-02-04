<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update position of of a column
 *
 * Updates the position of a specific column. Also updates the positions of all following columns on
 * the same board. The ID of the board and the ID of the column must be specified.
 */
class UpdatePositionOfOfColumn extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}/columns/{$this->columnId}/position";
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param int $position The position number
	 */
	public function __construct(
		protected string $boardId,
		protected string $columnId,
		protected int $position,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['position' => $this->position]);
	}
}
