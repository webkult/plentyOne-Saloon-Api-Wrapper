<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get address option type
 *
 * Gets an address option type. The ID of the address option type must be specified.
 */
class GetAddressOptionType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/option_types/{$this->optionTypeId}";
	}


	/**
	 * @param int $optionTypeId The ID of the address option type
	 */
	public function __construct(
		protected int $optionTypeId,
	) {
	}
}
