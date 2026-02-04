<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete reference from a given task
 *
 * Deletes a reference from a given task. The ID of the board, the ID of the column, the ID of the task
 * and the ID of the reference must be specified.
 */
class DeleteReferenceFromGivenTask extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}/columns/{$this->columnId}/tasks/{$this->taskId}/references/{$this->referenceId}";
	}


	/**
	 * @param string $boardId The ID of the task
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 * @param string $referenceId The ID of the reference
	 */
	public function __construct(
		protected string $boardId,
		protected string $columnId,
		protected string $taskId,
		protected string $referenceId,
	) {
	}
}
