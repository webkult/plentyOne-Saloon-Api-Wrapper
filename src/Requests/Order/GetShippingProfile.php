<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a shipping profile
 *
 * Gets a shipping profile. The ID of the shipping profile must be specified.
 */
class GetShippingProfile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/presets/{$this->presetId}";
	}


	/**
	 * @param int $presetId The ID of the shipping profile
	 * @param null|array $columns The attributes to be loaded in the shipping profile
	 */
	public function __construct(
		protected int $presetId,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns]);
	}
}
