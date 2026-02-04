<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete company contact relation
 *
 * Deletes a company contact relation. The ID of the account contact relation must be specified.
 * An
 * account is equivalent to a company.
 */
class DeleteCompanyContactRelation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contact_relations/{$this->accountContactRelationId}";
	}


	/**
	 * @param int $accountContactRelationId The ID of the company contact relation
	 */
	public function __construct(
		protected int $accountContactRelationId,
	) {
	}
}
