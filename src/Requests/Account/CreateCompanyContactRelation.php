<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create company contact relation
 *
 * Create a company contact relation. The ID of the account contact relation must be specified.
 * An
 * account is equivalent to a company.
 */
class CreateCompanyContactRelation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contact_relations";
	}


	/**
	 * @param int $accountId The ID of the company. An account is equivalent to a company.
	 * @param int $contactId The ID of the contact.
	 */
	public function __construct(
		protected int $accountId,
		protected int $contactId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['accountId' => $this->accountId, 'contactId' => $this->contactId]);
	}
}
