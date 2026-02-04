<?php

namespace PlentyOne\Api\Requests\TicketMessage;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all ticket messages for given ticket ID
 *
 * Lists all ticket messages. The ID of the ticket must be specified.
 */
class ListAllTicketMessagesForGivenTicketId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets/{$this->ticketId}/messages";
	}


	/**
	 * @param int $ticketId The ID of the ticket containing the messages
	 */
	public function __construct(
		protected int $ticketId,
	) {
	}
}
