<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List variation barcodes
 *
 * Lists all barcodes of a variation. The ID of the item and the ID of the variation must be specified.
 */
class ListVariationBarcodes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_barcodes";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param null|string $with Includes the specified variation barcode information in the results. The following parameter is available: <ul><li>barcode</li></ul>
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
