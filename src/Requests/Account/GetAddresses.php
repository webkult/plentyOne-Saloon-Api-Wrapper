<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get addresses
 *
 * Get all available addresses
 */
class GetAddresses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses";
	}


	/**
	 * @param null|string $updatedTo Filter that restricts the search result to addresses that were updated before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param null|string $updatedFrom Filter that restricts the search result to addresses that were updated after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param null|string $createdTo Filter that restricts the search result to addresses that were created before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param null|string $createdFrom Filter that restricts the search result to addresses that were created after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param null|string $with Includes the specified address information in the results. The following parameters are available: contactRelations, orderRelations. More than one parameter should be separated by commas.
	 * @param null|int $page The page of results to search for
	 * @param null|int $itemsPerPage The number of items to list per page
	 */
	public function __construct(
		protected ?string $updatedTo = null,
		protected ?string $updatedFrom = null,
		protected ?string $createdTo = null,
		protected ?string $createdFrom = null,
		protected ?string $with = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'updatedTo' => $this->updatedTo,
			'updatedFrom' => $this->updatedFrom,
			'createdTo' => $this->createdTo,
			'createdFrom' => $this->createdFrom,
			'with' => $this->with,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
		]);
	}
}
