<?php

namespace PlentyOne\Api\Requests\Boards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get board by ID
 *
 * Gets a specific board by its ID. The ID of the board must be specified.
 */
class GetBoardById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}";
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param null|int $tasksPerPage Maximum number of tasks to list per column
	 */
	public function __construct(
		protected string $boardId,
		protected ?int $tasksPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['tasksPerPage' => $this->tasksPerPage]);
	}
}
