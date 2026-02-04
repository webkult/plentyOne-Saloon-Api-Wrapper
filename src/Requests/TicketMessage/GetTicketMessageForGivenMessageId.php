<?php

namespace PlentyOne\Api\Requests\TicketMessage;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get ticket message for given message ID
 *
 * Gets a ticket message. The ID of the message must be specified.
 */
class GetTicketMessageForGivenMessageId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets/messages/{$this->messageId}";
	}


	/**
	 * @param int $messageId The ID of the ticket message to be returned
	 */
	public function __construct(
		protected int $messageId,
	) {
	}
}
