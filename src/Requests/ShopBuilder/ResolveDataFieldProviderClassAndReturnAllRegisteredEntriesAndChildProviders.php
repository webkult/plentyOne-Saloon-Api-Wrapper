<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Resolve a data field provider class and return all registered entries and child providers.
 *
 * Resolve a data field provider class and return all registered entries and child providers.
 */
class ResolveDataFieldProviderClassAndReturnAllRegisteredEntriesAndChildProviders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/data_fields";
	}


	/**
	 * @param null|string $providerClass Class name of the data field provider to resolve.
	 */
	public function __construct(
		protected ?string $providerClass = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['providerClass' => $this->providerClass]);
	}
}
