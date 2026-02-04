<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the revenue account configuration of a country
 *
 * Get the revenue account configuration of a country. The ID of the accounting location that the
 * country is associated with as well as the ID of the country must be specified.
 */
class GetTheRevenueAccountConfigurationOfCountry extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->locationId}/countries/{$this->countryId}/revenue_accounts";
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 * @param int $countryId The ID of the country.
	 */
	public function __construct(
		protected int $locationId,
		protected int $countryId,
	) {
	}
}
