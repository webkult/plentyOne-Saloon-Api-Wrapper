<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List address options
 *
 * Lists address options. The ID of the address must be specified.
 */
class ListAddressOptions extends Request
{
	protected Method $method = Method::GET;


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
