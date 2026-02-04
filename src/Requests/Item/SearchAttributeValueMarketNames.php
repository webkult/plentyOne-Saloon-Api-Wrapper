<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search attribute value market names
 *
 * Searches the delete log.
 */
class SearchAttributeValueMarketNames extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/value_market_names";
	}


	/**
	 * @param int $attributeId
	 * @param null|int $page The page of results to search for
	 * @param null|int $itemsPerPage The number of items to list per page
	 */
	public function __construct(
		protected int $attributeId,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
