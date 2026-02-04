<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete address of the contact
 *
 * Deletes an address of the contact. The ID of the contact and the ID of the address must be
 * specified.
 */
class DeleteAddressOfTheContact extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/addresses/{$this->addressId}";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $addressId The ID of the address
	 * @param null|int $typeId The type ID of the address. Possible values: <ul><li>Invoice address = 1</li><li> Delivery address = 2</li></ul>
	 */
	public function __construct(
		protected int $contactId,
		protected int $addressId,
		protected ?int $typeId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['typeId' => $this->typeId]);
	}
}
