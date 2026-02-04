<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List bank accounts paginated
 *
 * Lists all bank accounts of the contact. The ID of the contact must be specified.
 */
class ListBankAccountsPaginated extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/banksPaginated";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param null|int $itemsPerPage The number of items per page
	 */
	public function __construct(
		protected int $contactId,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemsPerPage' => $this->itemsPerPage]);
	}
}
