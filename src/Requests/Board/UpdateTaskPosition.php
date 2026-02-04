<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update task position
 *
 * Updates the position of a task. The ID of the board, the ID of the column and the ID of the task
 * must be specified.
 */
class UpdateTaskPosition extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}/columns/{$this->columnId}/tasks/{$this->taskId}/position";
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column the task belongs to
	 * @param string $taskId The ID of the task
	 * @param int $position The new position of the task
	 */
	public function __construct(
		protected string $boardId,
		protected string $columnId,
		protected string $taskId,
		protected int $position,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['position' => $this->position]);
	}
}
