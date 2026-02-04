<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update tags of message
 *
 * Updates the tags of the message. The UUID must be specified.
 */
class UpdateTagsOfMessage extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/{$this->uuid5}/tags";
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 * @param array $tags The tags of the message
	 */
	public function __construct(
		protected string $uuid5,
		protected array $tags,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['tags' => $this->tags]);
	}
}
