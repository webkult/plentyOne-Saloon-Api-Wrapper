<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Fill a variation
 *
 * Fills a variation. The ID of the variation must be specified.
 */
class FillVariation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}/variations/{$this->variationId}/fill";
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 */
	public function __construct(
		protected int $itemId,
		protected int $variationId,
	) {
	}
}
