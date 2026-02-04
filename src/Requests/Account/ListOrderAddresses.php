<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List order addresses
 *
 * Lists order addresses. The ID of the order and the ID of the relation type must be specified.
 */
class ListOrderAddresses extends Request
{
	protected Method $method = Method::GET;


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
