<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all eBay shop categories
 *
 * Lists all eBay shop categories.
 */
class ListAllEBayShopCategories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/shop_categories";
	}


	/**
	 * @param int $credentialsId The credentials ID for whom to fetch eBay shop categories.
	 * @param null|string $viewType How should the eBay shop categories be returned. Possible values: 'list' or 'tree'. Default is 'list'
	 */
	public function __construct(
		protected int $credentialsId,
		protected ?string $viewType = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['credentialsId' => $this->credentialsId, 'viewType' => $this->viewType]);
	}
}
