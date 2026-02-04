<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete contact option type
 *
 * Deletes a contact option type. The ID of the contact option type must be specified.
 */
class DeleteContactOptionType extends Request
{
	protected Method $method = Method::DELETE;


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
