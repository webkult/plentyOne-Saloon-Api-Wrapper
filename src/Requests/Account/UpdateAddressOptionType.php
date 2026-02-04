<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update address option type
 *
 * Updates an address option type. The ID of the option type must be specified.
 */
class UpdateAddressOptionType extends Request
{
	protected Method $method = Method::PUT;


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
