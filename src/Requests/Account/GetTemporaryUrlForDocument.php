<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get temporary url for document
 *
 * Gets a temporary url for a document. The ID of the contact must be specified.
 */
class GetTemporaryUrlForDocument extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/document/url";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $key The storage key to get temporary url for
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
