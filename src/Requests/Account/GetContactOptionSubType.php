<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get contact option sub-type
 *
 * Gets a contact option sub-type. The ID of the contact option sub-type must be specified.
 */
class GetContactOptionSubType extends Request
{
	protected Method $method = Method::GET;


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
