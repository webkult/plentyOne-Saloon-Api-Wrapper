<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get contact
 *
 * Gets a contact. The ID of the contact must be specified.
 */
class GetContact extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param null|string $with Includes the specified contact information in the results.
	 *      *     The following parameters are available: addresses, accounts.
	 *      *     More than one parameter should be separated by commas.
	 */
	public function __construct(
		protected int $contactId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
