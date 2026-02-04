<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an address for an existing order.
 *
 * Updates an address for an existing order and update the relation.
 */
class UpdateAddressForExistingOrder extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/addresses/{$this->addressId}/{$this->relationTypeId}";
	}


	/**
	 * @param int $orderId
	 * @param int $addressId
	 * @param int $relationTypeId
	 */
	public function __construct(
		protected int $orderId,
		protected int $addressId,
		protected int $relationTypeId,
	) {
	}
}
