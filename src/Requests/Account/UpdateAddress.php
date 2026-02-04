<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update address
 *
 * Updates an address. The ID of the address must be specified.
 */
class UpdateAddress extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/{$this->addressId}";
	}


	/**
	 * @param int $addressId The ID of the address
	 */
	public function __construct(
		protected int $addressId,
	) {
	}
}
