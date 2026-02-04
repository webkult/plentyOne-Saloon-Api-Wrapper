<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete message by UUID
 *
 * Deletes a message by the UUID. The UUID must be specified.
 */
class DeleteMessageByUuid extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/{$this->uuid5}";
	}


	/**
	 * @param string $uuid5 The UUID of the message to be deleted
	 */
	public function __construct(
		protected string $uuid5,
	) {
	}
}
