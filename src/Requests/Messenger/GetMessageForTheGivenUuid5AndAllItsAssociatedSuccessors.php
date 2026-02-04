<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get message for the given UUID5 and all its associated successors
 *
 * Gets the message for the given UUID5 and all its associated successors. The UUID must be specified.
 */
class GetMessageForTheGivenUuid5AndAllItsAssociatedSuccessors extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/{$this->uuid5}";
	}


	/**
	 * @param string $uuid5 The UUID5 of the message
	 */
	public function __construct(
		protected string $uuid5,
	) {
	}
}
