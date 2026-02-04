<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get address data by addressId
 *
 * Gets the address data by the address ID. The ID of the address must be specified.
 */
class GetAddressDataByAddressId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/{$this->addressId}/related_data";
	}


	/**
	 * @param int $addressId The ID of the address
	 * @param null|string $orderIds The ID of the orders
	 */
	public function __construct(
		protected int $addressId,
		protected ?string $orderIds = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['orderIds' => $this->orderIds]);
	}
}
