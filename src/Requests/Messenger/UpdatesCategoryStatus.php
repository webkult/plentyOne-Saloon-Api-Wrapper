<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates category status
 *
 * Updates category status
 */
class UpdatesCategoryStatus extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/categories/{$this->id}/status";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
