<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete files from contact documents
 *
 * Deletes files from contact documents. The ID of the contact must be specified.
 */
class DeleteFilesFromContactDocuments extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/documents";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param array $keyList List of storage keys to delete
	 */
	public function __construct(
		protected int $contactId,
		protected array $keyList,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['keyList' => $this->keyList]);
	}
}
