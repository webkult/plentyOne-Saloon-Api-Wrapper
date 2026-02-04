<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get returns service provider by the ID
 *
 * Gets a specific returns service provider. The ID of the returns service provider must be specified.
 */
class GetReturnsServiceProviderByTheId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/returns/returns_service_providers/{$this->providerId}";
	}


	/**
	 * @param int $providerId The ID of the returns service provider
	 */
	public function __construct(
		protected int $providerId,
	) {
	}
}
