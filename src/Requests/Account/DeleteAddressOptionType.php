<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete address option type
 *
 * Deletes an address option type. The ID of the option type must be specified.
 */
class DeleteAddressOptionType extends Request
{
	protected Method $method = Method::DELETE;


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
