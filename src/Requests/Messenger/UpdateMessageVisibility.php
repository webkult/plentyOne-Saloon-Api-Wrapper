<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update message visibility
 *
 * Updates the message visibility. The UUID must be specified.
 */
class UpdateMessageVisibility extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/{$this->uuid5}/visibility";
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 */
	public function __construct(
		protected string $uuid5,
	) {
	}
}
