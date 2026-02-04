<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get vcard filestream of contact
 *
 * Gets a filestream of the vcard of a contact. The ID of the contact must be specified.
 */
class GetVcardFilestreamOfContact extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/vcard";
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function __construct(
		protected int $contactId,
	) {
	}
}
