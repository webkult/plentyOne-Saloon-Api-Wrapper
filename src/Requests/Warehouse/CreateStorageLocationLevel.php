<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a storage location level
 *
 * Creates a storage location level.
 */
class CreateStorageLocationLevel extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/levels";
	}


	/**
	 * @param int $parentId The parent ID of the storage location level
	 * @param int $dimensionId The storage location dimension ID of the storage location level
	 * @param int $position The position of the storage location level
	 * @param string $name The name of the storage location level
	 */
	public function __construct(
		protected int $parentId,
		protected int $dimensionId,
		protected int $position,
		protected string $name,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'parentId' => $this->parentId,
			'dimensionId' => $this->dimensionId,
			'position' => $this->position,
			'name' => $this->name,
		]);
	}
}
