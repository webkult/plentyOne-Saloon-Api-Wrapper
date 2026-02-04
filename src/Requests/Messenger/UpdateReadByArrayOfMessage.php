<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update ReadBy array of message
 *
 * Updates the ReadBy array of the message. The UUID must be specified.
 */
class UpdateReadByArrayOfMessage extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/{$this->uuid5}/readBy";
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 * @param int $readBy The ID of the user who read the message
	 */
	public function __construct(
		protected string $uuid5,
		protected int $readBy,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['readBy' => $this->readBy]);
	}
}
