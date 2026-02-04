<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get preview list
 *
 * Get a preview list for parcel service presets.
 */
class GetPreviewList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/presets/preview/{$this->language}";
	}


	/**
	 * @param string $language Language for parcel preset name
	 */
	public function __construct(
		protected string $language,
	) {
	}
}
