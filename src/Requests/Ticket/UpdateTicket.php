<?php

namespace PlentyOne\Api\Requests\Ticket;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update ticket
 *
 * Updates a ticket. The ID of the ticket must be specified.
 */
class UpdateTicket extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets/{$this->ticketId}";
	}


	/**
	 * @param int $ticketId The ID of the ticket
	 */
	public function __construct(
		protected int $ticketId,
	) {
	}
}
