<?php

namespace PlentyOne\Api\Requests\TicketMessage;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all internal ticket messages
 *
 * Lists all internal ticket messages. The ID of the ticket must be specified. When type = 'comment',
 * the message is internal.
 */
class ListAllInternalTicketMessages extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets/{$this->ticketId}/messages/comment";
	}


	/**
	 * @param int $ticketId The ID of the ticket containing the messages
	 */
	public function __construct(
		protected int $ticketId,
	) {
	}
}
