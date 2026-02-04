<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Sets an event as active / inactive
 *
 * Sets an event as active / inactive
 */
class SetsEventAsActiveInactive extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/events/{$this->id}/update_status";
	}


	/**
	 * @param int $id
	 * @param bool $status The new status. Expected values: true/false
	 */
	public function __construct(
		protected int $id,
		protected bool $status,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['status' => $this->status]);
	}
}
