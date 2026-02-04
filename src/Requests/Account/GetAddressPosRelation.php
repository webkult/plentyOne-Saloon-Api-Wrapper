<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get address POS relation
 *
 * Gets an address POS relation. The ID of the address POS relation must be specified.
 */
class GetAddressPosRelation extends Request
{
	protected Method $method = Method::GET;


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
