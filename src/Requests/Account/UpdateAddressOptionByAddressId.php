<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update address option by addressId
 *
 * Updates an address option. The ID of the address must be specified.
 */
class UpdateAddressOptionByAddressId extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/{$this->addressId}/options";
	}


	/**
	 * @param int $addressId The ID of the address
	 */
	public function __construct(
		protected int $addressId,
	) {
	}
}
