<?php

namespace PlentyOne\Api\Requests\TicketMessage;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all public ticket messages
 *
 * Lists all public ticket messages. The ID of the ticket must be specified. When type = 'message', the
 * message is public.
 */
class ListAllPublicTicketMessages extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets/{$this->ticketId}/messages/message";
	}


	/**
	 * @param int $ticketId The ID of the ticket containing the messages
	 */
	public function __construct(
		protected int $ticketId,
	) {
	}
}
