<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List contact events by contact ID
 *
 * Lists contact events by the contact ID. The ID of the contact must be specified.
 */
class ListContactEventsByContactId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/contact_events";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param null|int $page The page of results to search for
	 * @param null|int $itemsPerPage The number of items to list per page
	 */
	public function __construct(
		protected int $contactId,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
