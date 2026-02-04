<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete address
 *
 * Deletes an address. The ID of the address must be specified.
 */
class DeleteAddress extends Request
{
	protected Method $method = Method::DELETE;


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
