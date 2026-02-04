<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single conversation by UUID
 *
 * Get a single conversation by UUID
 */
class GetSingleConversationByUuid extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/{$this->uuid5}";
	}


	/**
	 * @param int $uuid5
	 */
	public function __construct(
		protected int $uuid5,
	) {
	}
}
