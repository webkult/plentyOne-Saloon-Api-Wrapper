<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all attachments by UUID
 *
 * Gets all attachments as ZIP file. The UUID of the message must be specified.
 */
class GetAllAttachmentsByUuid extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/{$this->uuid5}/attachments/all";
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 */
	public function __construct(
		protected string $uuid5,
	) {
	}
}
