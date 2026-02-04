<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a VAT configuration for a country in a location.
 *
 * Gets the VAT configuration found by matching the given location, delivery country and date of
 * validity.
 */
class GetVatConfigurationForCountryInLocation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/vat/locations/{$this->locationId}/countries/{$this->countryId}/date/{$this->date}";
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 * @param int $countryId The ID of the country of delivery
	 * @param int $date
	 * @param string $startDate The date of validity
	 * @param null|array $with The relations to load with the VAT object. The relations available are location or country.
	 * @param null|array $columns The attributes of the VAT configuration
	 */
	public function __construct(
		protected int $locationId,
		protected int $countryId,
		protected int $date,
		protected string $startDate,
		protected ?array $with = null,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['startDate' => $this->startDate, 'with[]' => $this->with, 'columns[]' => $this->columns]);
	}
}
