<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create address option
 *
 * Creates an address option. The ID of the address must be specified.
 */
class CreateAddressOption extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
