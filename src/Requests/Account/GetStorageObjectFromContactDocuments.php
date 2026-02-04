<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get storage object from contact documents
 *
 * Gets a storage object from contact documents. The ID of the contact must be specified.
 */
class GetStorageObjectFromContactDocuments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/document";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $key The storage key of the object to get from contact documents.
	 */
	public function __construct(
		protected int $contactId,
		protected string $key,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['key' => $this->key]);
	}
}
