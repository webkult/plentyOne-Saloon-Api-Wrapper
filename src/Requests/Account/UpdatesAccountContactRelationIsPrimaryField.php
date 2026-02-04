<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates an account contact relation isPrimary field
 *
 * Update an account contact relation isPrimary field. The ID of the account contact relation must be
 * specified.
 * An account is equivalent to a company.
 */
class UpdatesAccountContactRelationIsPrimaryField extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contact_relations/{$this->accountContactRelationId}/primary";
	}


	/**
	 * @param int $accountContactRelationId The ID of the company contact relation
	 * @param bool $isPrimary Sets one contact per account as the primary contact.
	 */
	public function __construct(
		protected int $accountContactRelationId,
		protected bool $isPrimary,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['isPrimary' => $this->isPrimary]);
	}
}
