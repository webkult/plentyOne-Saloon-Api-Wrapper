<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update contact option sub-type
 *
 * Updates a contact option sub-type. The ID of the contact option sub-type must be specified.
 */
class UpdateContactOptionSubType extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/option_sub_types/{$this->optionSubTypeId}";
	}


	/**
	 * @param int $optionSubTypeId The ID of the contact option sub-type
	 */
	public function __construct(
		protected int $optionSubTypeId,
	) {
	}
}
