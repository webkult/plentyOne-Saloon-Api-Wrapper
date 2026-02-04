<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get contact option
 *
 * Gets a contact option. The ID of the option must be specified.
 */
class GetContactOption extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/options/{$this->optionId}";
	}


	/**
	 * @param int $optionId The ID of the option
	 */
	public function __construct(
		protected int $optionId,
	) {
	}
}
