<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List contact options
 *
 * Lists contact options. The ID of the contact must be specified.
 */
class ListContactOptions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/options";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param null|int $typeId The ID of the type
	 * @param null|int $subTypeId The ID of the sub type
	 */
	public function __construct(
		protected int $contactId,
		protected ?int $typeId = null,
		protected ?int $subTypeId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['typeId' => $this->typeId, 'subTypeId' => $this->subTypeId]);
	}
}
