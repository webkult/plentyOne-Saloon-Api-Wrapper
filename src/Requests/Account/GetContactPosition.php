<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get contact position
 *
 * Gets a contact position. The ID of the position must be specified.
 */
class GetContactPosition extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/positions/{$this->positionId}";
	}


	/**
	 * @param int $positionId The ID of the position
	 */
	public function __construct(
		protected int $positionId,
	) {
	}
}
