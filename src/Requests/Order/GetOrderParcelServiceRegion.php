<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an  order parcel service region
 *
 * Gets an parcel service region. The ID of the parcel service region must be specified.
 */
class GetOrderParcelServiceRegion extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/parcel_service_regions/{$this->parcelServiceRegionId}";
	}


	/**
	 * @param int $parcelServiceRegionId The ID of the parcel service region
	 * @param null|array $columns The properties to be loaded
	 */
	public function __construct(
		protected int $parcelServiceRegionId,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns]);
	}
}
