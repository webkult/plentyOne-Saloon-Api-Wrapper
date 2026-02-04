<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create multiple storage location dimensions
 *
 * Creates multiple storage location dimension.
 */
class CreateMultipleStorageLocationDimensions extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/multiple_dimensions";
	}


	/**
	 * @param array $dimensions The dimensions array that contains data for creating multiple dimensions
	 */
	public function __construct(
		protected array $dimensions,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['dimensions' => $this->dimensions]);
	}
}
