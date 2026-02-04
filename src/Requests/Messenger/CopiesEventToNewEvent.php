<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Copies an event to a new event
 *
 * Copies an event to a new event
 */
class CopiesEventToNewEvent extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/events/{$this->id}/copy";
	}


	/**
	 * @param int $id
	 * @param string $name The name of the new event
	 */
	public function __construct(
		protected int $id,
		protected string $name,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['name' => $this->name]);
	}
}
