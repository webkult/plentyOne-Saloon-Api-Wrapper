<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List shipping service providers
 *
 * Lists all shipping service providers.
 */
class ListShippingServiceProviders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/shipping_service_providers";
	}


	/**
	 * @param null|string $updatedAtBefore Filter that restricts the search result to shipping providers that were updated before a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
	 * @param null|string $updatedAtAfter Filter that restricts the search result to shipping providers that were updated after a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
	 * @param null|string $with The name of an relation to the shipping provider. The following parameter is available: ownShippingServiceProviders.
	 */
	public function __construct(
		protected ?string $updatedAtBefore = null,
		protected ?string $updatedAtAfter = null,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['updatedAtBefore' => $this->updatedAtBefore, 'updatedAtAfter' => $this->updatedAtAfter, 'with' => $this->with]);
	}
}
