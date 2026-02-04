<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Sets the last execution date for an existing event
 *
 * Sets the current date as the last execution date for an existing event
 */
class SetsTheLastExecutionDateForExistingEvent extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/events/{$this->id}/updateExecutedAtEvent";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
