<?php

namespace PlentyOne\Api\Requests\AddressDesign;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get layout by country id
 *
 * Gets a layout by the country ID. The ID of the country must be specified.
 */
class GetLayoutByCountryId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/address_layout/country/{$this->countryId}";
	}


	/**
	 * @param int $countryId The ID of the country
	 */
	public function __construct(
		protected int $countryId,
	) {
	}
}
