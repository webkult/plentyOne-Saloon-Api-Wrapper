<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete address warehouse relation
 *
 * Deletes an address warehouse relation. The ID of the relation must be specified.
 */
class DeleteAddressWarehouseRelation extends Request
{
	protected Method $method = Method::DELETE;


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
