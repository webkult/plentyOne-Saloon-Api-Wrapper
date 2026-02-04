<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update address POS relation
 *
 * Updates an address POS relation. The ID of the address POS relation must be specified.
 */
class UpdateAddressPosRelation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/pos_relations/{$this->addressPosRelationId}";
	}


	/**
	 * @param int $addressPosRelationId The ID of the address POS relation
	 */
	public function __construct(
		protected int $addressPosRelationId,
	) {
	}
}
