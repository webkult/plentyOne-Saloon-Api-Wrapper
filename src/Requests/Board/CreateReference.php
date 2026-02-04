<?php

namespace PlentyOne\Api\Requests\Board;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create reference
 *
 * Creates a new reference from a given task to a contact or a ticket. The ID of the board, the ID of
 * the column and the ID of the task must be specified.
 */
class CreateReference extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/boards/{$this->boardId}/columns/{$this->columnId}/tasks/{$this->taskId}/references";
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 * @param string $referenceValue Reference type followed by foreign ID of the referenced object. Syntax: TYPE-ID Example: user-123456 Types: user,ticket,contact,order,item
	 */
	public function __construct(
		protected string $boardId,
		protected string $columnId,
		protected string $taskId,
		protected string $referenceValue,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['referenceValue' => $this->referenceValue]);
	}
}
