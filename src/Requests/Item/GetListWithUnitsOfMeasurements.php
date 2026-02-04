<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get list with units of measurements
 *
 * Gets a list of unit measurement ISOs.
 */
class GetListWithUnitsOfMeasurements extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/units/unitsOfMeasurements";
	}


	/**
	 * @param null|string $language Language is required to be used for extracting the translations from item/unit.
	 */
	public function __construct(
		protected ?string $language = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['language' => $this->language]);
	}
}
