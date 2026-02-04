<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an existing document link
 *
 * Update an existing document link. The ID of the contact must be specified also the document id.
 */
class UpdateExistingDocumentLink extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/document/link/{$this->documentId}";
	}


	/**
	 * @param string $documentId The ID of the document link
	 * @param int $contactId The ID of the contact
	 * @param string $link The external link
	 * @param null|string $title An alternative title for the link
	 */
	public function __construct(
		protected string $documentId,
		protected int $contactId,
		protected string $link,
		protected ?string $title = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['link' => $this->link, 'title' => $this->title]);
	}
}
