<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete address contact relation
 *
 * Deletes an address contact relation. The ID of the address contact relation must be specified.
 */
class DeleteAddressContactRelation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/contact_relations/{$this->addressContactRelationId}";
	}


	/**
	 * @param int $addressContactRelationId The ID of the address contact relation
	 */
	public function __construct(
		protected int $addressContactRelationId,
	) {
	}
}
