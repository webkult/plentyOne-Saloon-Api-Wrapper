<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update contact
 *
 * Updates a contact. The ID of the contact must be specified.
 */
class UpdateContact extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param null|array $tagRelationships When this parameter is used, the current relations between contacts and tags
	 *      *     will be deleted and replaced by the given ones. If the parameter is not used, the current relations remain.
	 */
	public function __construct(
		protected int $contactId,
		protected ?array $tagRelationships = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['tagRelationships' => $this->tagRelationships]);
	}
}
