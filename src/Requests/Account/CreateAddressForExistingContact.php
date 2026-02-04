<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create address for existing contact
 *
 * Creates an address for a specific contact. The ID of the contact must be specified.
 * <br>When
 * creating an address, the system checks for duplicates. If the system finds a duplicate, this address
 * will be assigned to the contact data record.
 */
class CreateAddressForExistingContact extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/addresses";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param null|bool $isPrimary Sets a contact address per address type as the primary address.
	 * @param null|int $typeId The type ID of the address. Possible values: <ul><li>Invoice address = 1</li><li> Delivery address = 2</li></ul>
	 */
	public function __construct(
		protected int $contactId,
		protected ?bool $isPrimary = null,
		protected ?int $typeId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['isPrimary' => $this->isPrimary, 'typeId' => $this->typeId]);
	}
}
