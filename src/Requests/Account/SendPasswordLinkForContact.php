<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Send password link for contact
 *
 * Sends an email to a contact with a link to change the password. The ID of the contact must be
 * specified.
 */
class SendPasswordLinkForContact extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/access_data/new_password";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $password The new password
	 */
	public function __construct(
		protected int $contactId,
		protected string $password,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['password' => $this->password]);
	}
}
