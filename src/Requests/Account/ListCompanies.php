<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List companies
 *
 * Lists all companies. An account is equivalent to a company.
 */
class ListCompanies extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts";
	}


	/**
	 * @param null|string $updatedAt Filter that restricts the search result to accounts that were updated according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'updatedAt=between:yyyy-mm-dd,yyyy-mm-dd'</li>
	 *     <li>'updatedAt=eq:yyyy-mm-dd' (=)</li>
	 *     <li>'updatedAt=gt:yyyy-mm-dd' (>)</li>
	 *     <li>'updatedAt=gte:yyyy-mm-dd' (>=)</li>
	 *     <li>'updatedAt=lt:yyyy-mm-dd' (<)</li>
	 *     <li>'updatedAt=lte:yyyy-mm-dd' (<=)</li>
	 *     <li>Dates can also include the time. Example: 2017-03-08 13:24:17</li>
	 *     <li>Without including the time we will use 00:00:00 as default. Example: 2017-03-08 00:00:00</li>
	 *     </ul>
	 * @param null|string $createdAt Filter that restricts the search result to accounts that were created according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'createdAt=between:yyyy-mm-dd,yyyy-mm-dd'</li>
	 *     <li>'createdAt=eq:yyyy-mm-dd' (=)</li>
	 *     <li>'createdAt=gt:yyyy-mm-dd' (>)</li>
	 *     <li>'createdAt=gte:yyyy-mm-dd' (>=)</li>
	 *     <li>'createdAt=lt:yyyy-mm-dd' (<)</li>
	 *     <li>'createdAt=lte:yyyy-mm-dd' (<=)</li>
	 *     <li>Dates can also include the time. Example: 2017-03-08 13:24:17</li>
	 *     <li>Without including the time we will use 00:00:00 as default. Example: 2017-03-08 00:00:00</li>
	 *     </ul>
	 * @param null|int $id Filter that restricts the search result to companies that have an ID according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'id=eq:ID' (=) </li>
	 *     </ul>
	 * @param null|string $companyName Filter that restricts the search result to companies that have a company name according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'companyName=like:expamle'</li>
	 *     <li>'companyName=eq:example' (=)</li>
	 *     </ul>
	 * @param null|int $userId Filter that restricts the search result to companies that have a userId / ownerId according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'userId=eq:ID' (=) </li>
	 *     </ul>
	 * @param null|string $sortBy Enables the sorting of fields. SortBy has as parameter.
	 *      *      The name of the field will also be sorted.
	 * @param null|string $sortOrder Enables to sort the result in an ascending and descending order.
	 *      *      When you want to sort the results in ascending order, use  <code>asc</code>.
	 *      *      When you want to sort the result in descending order, use <code>desc</code>.
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|string $with Includes the specified contact information in the results.
	 *      *      The following parameters are available:
	 *      *          <code>contacts</code>,
	 *      *          <code>contactRelations</code>,
	 *      *          <code>contactsPrimaryBillingAddress</code>,
	 *      *          <code>salesRepresentativeRegions</code>.
	 *      *      More than one parameter should be separated by commas
	 */
	public function __construct(
		protected ?string $updatedAt = null,
		protected ?string $createdAt = null,
		protected ?int $id = null,
		protected ?string $companyName = null,
		protected ?int $userId = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'updatedAt' => $this->updatedAt,
			'createdAt' => $this->createdAt,
			'id' => $this->id,
			'companyName' => $this->companyName,
			'userId' => $this->userId,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'with' => $this->with,
		]);
	}
}
