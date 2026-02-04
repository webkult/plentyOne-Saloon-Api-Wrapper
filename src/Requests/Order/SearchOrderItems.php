<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search order items
 *
 * Searches order items. The ID of the order must be specified.
 */
class SearchOrderItems extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/items";
	}


	/**
	 * @param int $orderId
	 * @param null|int $page The page to get. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of order items to be displayed per page. The default number of order items per page is 50. The maximum number is 250.
	 * @param null|string $sortBy Sort search result according to itemVariationId, orderItemName, createdAt, updatedAt or id. The default value is orderItemId.
	 * @param null|string $sortOrder Sort direction desc or asc. The default value is asc.
	 * @param null|array $with Load additional relations for an order item. Currently possible are:
	 *     <ul>
	 *     <li>'variation' = The variation that is associated with the order item.</li>
	 *     <li>'giftCardCodes' = The gift card codes that are associated with the order item.</li>
	 *     <li>'transactions' = The transactions that are associated with the order item.</li>
	 *     <li>'serialNumbers' = The serial numbers that are associated with the order item.</li>
	 *     <li>'variationBarcodes' = The barcodes that are associated with variation of the order item.</li>
	 *     </ul>
	 */
	public function __construct(
		protected int $orderId,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
			'with' => $this->with,
		]);
	}
}
