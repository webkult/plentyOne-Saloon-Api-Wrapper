<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List contacts
 *
 * Lists all contacts of the company. The ID of the company must be specified. An account is equivalent
 * to a company
 */
class ListContacts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/{$this->accountId}/contacts";
	}


	/**
	 * @param int $accountId The ID of the company
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|string $sortBy Enables the sort of fields. SortBy has as parameter.
	 *      *      The name of the contact field will also be sorted.
	 * @param null|string $sortOrder Enables to sort the result in an ascending and descending order.
	 *      *      When you want to sort the results in ascending order, use <code>asc</code>.
	 *      *      When you want to sort the result in descending order, use <code>desc</code>.
	 */
	public function __construct(
		protected int $accountId,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
		]);
	}
}
