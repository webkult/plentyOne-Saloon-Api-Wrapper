<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieves a folder object based on UUID
 *
 * Retrieves a folder object based on UUID
 */
class RetrievesFolderObjectBasedOnUuid extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/folders/{$this->uuid5}";
	}


	/**
	 * @param int $uuid5
	 */
	public function __construct(
		protected int $uuid5,
	) {
	}
}
