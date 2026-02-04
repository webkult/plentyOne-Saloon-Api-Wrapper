<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all the packages for the given pallet ID
 *
 * Return all the packages linked for the given pallet. The ID of the pallet must be specified
 */
class GetAllThePackagesForTheGivenPalletId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/pallets/{$this->palletId}/packages";
	}


	/**
	 * @param int $palletId The ID of the pallet.
	 * @param null|array $with Possible value is 'items'.
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of packages to list per page.
	 * @param null|string $sortBy The column to be sorted by
	 * @param null|string $sortOrder The sort direction
	 */
	public function __construct(
		protected int $palletId,
		protected ?array $with = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
		]);
	}
}
