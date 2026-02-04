<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update message controls
 *
 * Updates the message ui control options in the message meta data and returns the message.
 */
class UpdateMessageControls extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/{$this->uuid5}/controls";
	}


	/**
	 * @param int $uuid5
	 */
	public function __construct(
		protected int $uuid5,
	) {
	}
}
