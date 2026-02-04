<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Convert guest account into regular account
 *
 * Converts a guest account into a regular account.
 */
class ConvertGuestAccountIntoRegularAccount extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/guests/convert";
	}


	/**
	 * @param null|int $contactId The ID of the contact
	 */
	public function __construct(
		protected ?int $contactId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['contactId' => $this->contactId]);
	}
}
