<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List returns service providers
 *
 * Lists all returns service providers.
 */
class ListReturnsServiceProviders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/returns/returns_service_providers";
	}


	/**
	 * @param int $id The ID of the returns service provider
	 * @param string $name The name of the returns service provider
	 * @param string $label The label of the returns service provider (if provided by plugin)
	 * @param int $pluginId The ID of the plugin
	 */
	public function __construct(
		protected int $id,
		protected string $name,
		protected string $label,
		protected int $pluginId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id' => $this->id, 'name' => $this->name, 'label' => $this->label, 'pluginId' => $this->pluginId]);
	}
}
