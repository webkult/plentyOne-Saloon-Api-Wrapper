<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update address of the contact
 *
 * Updates an address of the contact. The ID of the contact and the ID of the address must be
 * specified.
 * <br>When updating an address, the system checks for duplicates if the address has more
 * than one relation. If the system finds a duplicate, this address will be assigned to the contact
 * data record.
 */
class UpdateAddressOfTheContact extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/addresses/{$this->addressId}";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $addressId The ID of the address
	 * @param null|bool $isPrimary Sets a contact address per address type as the primary address.
	 * @param null|int $typeId The type ID of the address. Possible values: <ul><li>Invoice address = 1</li><li> Delivery address = 2</li></ul>
	 */
	public function __construct(
		protected int $contactId,
		protected int $addressId,
		protected ?bool $isPrimary = null,
		protected ?int $typeId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['isPrimary' => $this->isPrimary, 'typeId' => $this->typeId]);
	}
}
