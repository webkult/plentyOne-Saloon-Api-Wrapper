<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List listing stock dependence types
 *
 * Lists listing stock dependence types.
 */
class ListListingStockDependenceTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/stock_dependence_types";
	}


	/**
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|array $with An array with child instances to be loaded. Available values: 'names'.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage, 'with' => $this->with]);
	}
}
