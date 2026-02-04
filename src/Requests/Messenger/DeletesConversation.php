<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes a conversation
 *
 * Deletes a conversation (soft delete, conversation will be moved to trash)
 */
class DeletesConversation extends Request
{
	protected Method $method = Method::DELETE;


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
