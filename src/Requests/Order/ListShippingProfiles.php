<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List shipping profiles
 *
 * Lists all shipping profiles.
 */
class ListShippingProfiles extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/presets";
	}


	/**
	 * @param null|array $columns The attributes to be loaded in the shipping profile
	 * @param null|string $parcelServiceName Filter that restricts the search result to parcel service presets with a specified backend name (e.g. 'DHL' for DHL)
	 * @param null|string $shippingServiceProvider Filter that restricts the search result to a shipping service provider
	 * @param null|string $name Filter that restricts the search result to parcel service presets with a specified backend name
	 * @param null|string $shippingGroup Filter that restricts the search result to parcel service preset with specific shipping_group name
	 * @param null|string $with The name of an relation to the preset. The following parameter is available: parcelServiceRegion, parcelServiceRegionConstraint, parcelServicePresetNames and parcelServiceNames.
	 * @param null|string $updatedAtBefore Filter that restricts the search result to presets that were updated before a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
	 * @param null|string $updatedAtAfter Filter that restricts the search result to presets that were updated after a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
	 */
	public function __construct(
		protected ?array $columns = null,
		protected ?string $parcelServiceName = null,
		protected ?string $shippingServiceProvider = null,
		protected ?string $name = null,
		protected ?string $shippingGroup = null,
		protected ?string $with = null,
		protected ?string $updatedAtBefore = null,
		protected ?string $updatedAtAfter = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'columns' => $this->columns,
			'parcelServiceName' => $this->parcelServiceName,
			'shippingServiceProvider' => $this->shippingServiceProvider,
			'name' => $this->name,
			'shippingGroup' => $this->shippingGroup,
			'with' => $this->with,
			'updatedAtBefore' => $this->updatedAtBefore,
			'updatedAtAfter' => $this->updatedAtAfter,
		]);
	}
}
