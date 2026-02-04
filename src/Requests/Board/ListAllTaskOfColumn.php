<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all task of a column
 *
 * Lists all tasks of a given column. The ID of the board and the ID of the column must be specified.
 */
class ListAllTaskOfColumn extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}/columns/{$this->columnId}/tasks";
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param null|int $startAt The position of a task to start listing at
	 * @param null|int $tasksPerPage The number of tasks to list per page
	 */
	public function __construct(
		protected string $boardId,
		protected string $columnId,
		protected ?int $startAt = null,
		protected ?int $tasksPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['startAt' => $this->startAt, 'tasksPerPage' => $this->tasksPerPage]);
	}
}
