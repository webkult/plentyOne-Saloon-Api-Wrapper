<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for referrers
 *
 * Search for referrers by filter parameters.
 */
class SearchForReferrers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/referrers/search";
	}


	/**
	 * @param null|int $page The page to get. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of orders to be displayed per page. The default number of referrers per page is 20.
	 * @param null|string $sortBy Sort search result according to specified field. The default value is id.
	 * @param null|string $sortOrder Sort direction desc or asc. The default value is asc.
	 * @param null|int $id The ID of the referrer.
	 * @param null|int $name The name of the referrer.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?int $id = null,
		protected ?int $name = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
			'id' => $this->id,
			'name' => $this->name,
		]);
	}
}
