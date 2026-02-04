<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the item variation packing unit for a specific given id
 *
 * Returns the packing unit for the item variations based on the given ID, the language wanted and the
 * flag to say if the ID provided is the a unit ID
 */
class GetTheItemVariationPackingUnitForSpecificGivenId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/packing_units/{$this->id}";
	}


	/**
	 * @param int $id The ID of the packing unit
	 * @param null|string $language The language to return the unit name for. If no language is provided, all the languages will be returned
	 * @param null|bool $isUnitId A flag to say if the ID provided is the unit ID or not. If true, the unit ID will be taken into account to get the result
	 */
	public function __construct(
		protected int $id,
		protected ?string $language = null,
		protected ?bool $isUnitId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['language' => $this->language, 'isUnitId' => $this->isUnitId]);
	}
}
