<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an address for an existing order.
 *
 * Creates an address for an existing order and update the relation.
 */
class CreateAddressForExistingOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/addresses/{$this->relationTypeId}";
	}


	/**
	 * @param int $orderId
	 * @param int $relationTypeId
	 */
	public function __construct(
		protected int $orderId,
		protected int $relationTypeId,
	) {
	}
}
