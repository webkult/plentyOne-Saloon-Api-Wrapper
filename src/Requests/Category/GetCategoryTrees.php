<?php

namespace PlentyOne\Api\Requests\Category;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get category trees
 *
 * Gets category trees.
 */
class GetCategoryTrees extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/category_branches";
	}


	/**
	 * @param null|int $page The requested page of results
	 * @param null|int $itemsPerPage The number of results per page
	 * @param null|string $type The category type. Available values: item, container, content, blog
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $type = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage, 'type' => $this->type]);
	}
}
