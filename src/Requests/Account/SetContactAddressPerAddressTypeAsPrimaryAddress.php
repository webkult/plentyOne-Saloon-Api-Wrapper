<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Set contact address per address type as primary address
 *
 * Sets a contact address per address type as the primary address. The ID of the contact, the ID of the
 * address and the ID of the address type must be specified. A primary address can also be defined when
 * you create or update a contact address.
 */
class SetContactAddressPerAddressTypeAsPrimaryAddress extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/addresses/{$this->addressId}/types/{$this->addressTypeId}/primary";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $addressId The ID of the address
	 * @param int $addressTypeId The ID of the address type
	 */
	public function __construct(
		protected int $contactId,
		protected int $addressId,
		protected int $addressTypeId,
	) {
	}
}
