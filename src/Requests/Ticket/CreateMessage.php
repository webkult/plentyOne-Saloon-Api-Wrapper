<?php

namespace PlentyOne\Api\Requests\Ticket;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create message
 *
 * Creates a message for the ticket. The ID of the ticket must be specified.
 */
class CreateMessage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
