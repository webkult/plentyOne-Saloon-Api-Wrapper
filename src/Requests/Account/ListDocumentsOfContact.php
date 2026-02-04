<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List documents of a contact
 *
 * Lists all documents that are saved for a contact. The ID of the contact must be specified.
 */
class ListDocumentsOfContact extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/documents";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param null|string $continuationToken token from previous request to continue listing documents
	 */
	public function __construct(
		protected int $contactId,
		protected ?string $continuationToken = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['continuationToken' => $this->continuationToken]);
	}
}
