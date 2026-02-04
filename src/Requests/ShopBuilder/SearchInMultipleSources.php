<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search in multiple sources.
 *
 * Search in multiple sources.
 */
class SearchInMultipleSources extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/search";
	}


	/**
	 * @param null|string $query The query to search for.
	 * @param null|int $maxPerSource Maximum number of results per search source.
	 * @param null|array $sources Sources to consider during search.
	 */
	public function __construct(
		protected ?string $query = null,
		protected ?int $maxPerSource = null,
		protected ?array $sources = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['query' => $this->query, 'maxPerSource' => $this->maxPerSource, 'sources' => $this->sources]);
	}
}
