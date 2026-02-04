<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update contact position
 *
 * Updates a contact position. The ID of the position must be specified.
 */
class UpdateContactPosition extends Request
{
	protected Method $method = Method::PUT;


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
