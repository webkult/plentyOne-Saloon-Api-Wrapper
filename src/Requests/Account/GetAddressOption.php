<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get address option
 *
 * Gets an address option. The ID of the option must be specified.
 */
class GetAddressOption extends Request
{
	protected Method $method = Method::GET;


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
