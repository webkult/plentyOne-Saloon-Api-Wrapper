<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Check reference key
 *
 * Checks the reference key. The ID of the board, the ID of the column and the ID of the task as well
 * as the reference type and the reference key must be specified.
 */
class CheckReferenceKey extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}/columns/{$this->columnId}/tasks/{$this->taskId}/references/{$this->referenceType}/{$this->referenceKey}";
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 * @param string $referenceType The type of the reference
	 * @param int $referenceKey The key of the reference
	 */
	public function __construct(
		protected string $boardId,
		protected string $columnId,
		protected string $taskId,
		protected string $referenceType,
		protected int $referenceKey,
	) {
	}
}
