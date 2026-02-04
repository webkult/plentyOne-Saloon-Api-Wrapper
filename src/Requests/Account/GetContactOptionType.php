<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get contact option type
 *
 * Gets a contact option type. The ID of the contact option type must be specified.
 */
class GetContactOptionType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/option_types/{$this->optionTypeId}";
	}


	/**
	 * @param int $optionTypeId The ID of the contact option type
	 */
	public function __construct(
		protected int $optionTypeId,
	) {
	}
}
