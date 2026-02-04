<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieves a single type based on ID
 *
 * Retrieves a single type based on ID
 */
class RetrievesSingleTypeBasedOnId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/types/{$this->id}";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
