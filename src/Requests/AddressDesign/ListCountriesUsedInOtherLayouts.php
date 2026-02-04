<?php

namespace PlentyOne\Api\Requests\AddressDesign;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List countries used in other layouts
 *
 * Lists the countries that are already used in other layouts.
 */
class ListCountriesUsedInOtherLayouts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/address_layout/used_countries/{$this->uuid}";
	}


	/**
	 * @param string $uuid The UUID of the current layout
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
