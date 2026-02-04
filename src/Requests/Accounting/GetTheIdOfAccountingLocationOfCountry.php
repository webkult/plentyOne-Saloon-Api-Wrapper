<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the ID of an accounting location of a country
 *
 * Gets the ID of an accounting location of a country. The plenty ID of the client and the ID of the
 * country must be specified.
 */
class GetTheIdOfAccountingLocationOfCountry extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stores/{$this->plentyId}/locations";
	}


	/**
	 * @param int $plentyId
	 * @param null|int $countryId The ID of the country of the accounting location. The default accounting location of the client will be returned if the ID of a country is not specified.
	 */
	public function __construct(
		protected int $plentyId,
		protected ?int $countryId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['countryId' => $this->countryId]);
	}
}
