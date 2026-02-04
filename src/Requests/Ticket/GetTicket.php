<?php

namespace PlentyOne\Api\Requests\Ticket;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get ticket
 *
 * Gets the ticket. The ID of the ticket must be specified.
 */
class GetTicket extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets/{$this->ticketId}";
	}


	/**
	 * @param int $ticketId The ID of the ticket to be loaded.
	 * @param null|array $with An array with relations to be loaded with the ticket. Possible values are 'order' and 'contact'
	 */
	public function __construct(
		protected int $ticketId,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
