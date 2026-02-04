<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update address option
 *
 * Updates an address option. The ID of the option must be specified.
 */
class UpdateAddressOption extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/options/{$this->optionId}";
	}


	/**
	 * @param int $optionId The ID of the address option
	 */
	public function __construct(
		protected int $optionId,
	) {
	}
}
