<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update address warehouse relation
 *
 * Updates an address warehouse relation. The ID of the relation must be specified.
 */
class UpdateAddressWarehouseRelation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/warehouse_relations/{$this->relationId}";
	}


	/**
	 * @param int $relationId The ID of the address warehouse relation
	 */
	public function __construct(
		protected int $relationId,
	) {
	}
}
