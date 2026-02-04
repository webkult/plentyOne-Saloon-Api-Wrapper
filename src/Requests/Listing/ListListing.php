<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List listing
 *
 * Lists listings by filter options.
 */
class ListListing extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings";
	}


	/**
	 * @param null|int $id Filter that restricts the search result to listings with specific listing ID. Several IDs can be entered as array.
	 * @param null|int $itemId Filter that restricts the search result to listings with specific item ID. Several IDs can be entered as array.
	 * @param null|int $typeId Filter that restricts the search result to listings with specific type ID. Several IDs can be entered as array.
	 * @param null|int $stockDependenceTypeId Filter that restricts the search result to listings with specific stock dependence type ID. Several IDs can be entered as array.
	 * @param null|int $unitCombinationId Filter that restricts the search result to listings with specific unit combination ID. Several IDs can be entered as array.
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|array $with An array with child instances to be loaded. One of 'stockDependenceType', 'type', 'markets', 'properties'.
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?int $itemId = null,
		protected ?int $typeId = null,
		protected ?int $stockDependenceTypeId = null,
		protected ?int $unitCombinationId = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'itemId' => $this->itemId,
			'typeId' => $this->typeId,
			'stockDependenceTypeId' => $this->stockDependenceTypeId,
			'unitCombinationId' => $this->unitCombinationId,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'with' => $this->with,
		]);
	}
}
