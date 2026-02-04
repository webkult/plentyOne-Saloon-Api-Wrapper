<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate storage location preview and saves it
 *
 * Generates storage location preview and saves it
 */
class GenerateStorageLocationPreviewAndSavesIt extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/previews";
	}


	/**
	 * @param array $dimensions The storage location dimensions used by the generator
	 * @param array $storageLocationData The storage location data used by the generator
	 * @param array $levelData The storage location level data used by the generator
	 * @param int $save The save parameter that triggers the preview method or the process save method
	 */
	public function __construct(
		protected array $dimensions,
		protected array $storageLocationData,
		protected array $levelData,
		protected int $save,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'dimensions' => $this->dimensions,
			'storageLocationData' => $this->storageLocationData,
			'levelData' => $this->levelData,
			'save' => $this->save,
		]);
	}
}
