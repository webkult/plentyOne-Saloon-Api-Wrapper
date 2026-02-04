<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete task
 *
 * Deletes a task. The ID of the board, the ID of the column and the ID of the task must be specified.
 */
class DeleteTask extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}/columns/{$this->columnId}/tasks/{$this->taskId}";
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 */
	public function __construct(
		protected string $boardId,
		protected string $columnId,
		protected string $taskId,
	) {
	}
}
