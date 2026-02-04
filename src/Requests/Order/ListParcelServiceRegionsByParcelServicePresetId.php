<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List parcel service regions by parcel service preset ID
 *
 * Lists parcel service regions. The ID of the parcel service preset must be specified.
 */
class ListParcelServiceRegionsByParcelServicePresetId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/presets/{$this->presetId}/parcel_service_regions";
	}


	/**
	 * @param int $presetId  The ID of the preset
	 * @param null|array $columns The properties to be loaded
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
