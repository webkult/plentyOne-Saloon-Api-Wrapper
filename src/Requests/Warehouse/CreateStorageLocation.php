<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a storage location
 *
 * Creates a storage location.
 */
class CreateStorageLocation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations";
	}


	/**
	 * @param int $levelId The storage location level ID of the storage location
	 * @param string $label The label of the storage location
	 * @param string $purposeKey The location type key of the storage location
	 * @param string $statusKey The location status key of the storage location
	 * @param int $position The position of the storage location
	 */
	public function __construct(
		protected int $levelId,
		protected string $label,
		protected string $purposeKey,
		protected string $statusKey,
		protected int $position,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'levelId' => $this->levelId,
			'label' => $this->label,
			'purposeKey' => $this->purposeKey,
			'statusKey' => $this->statusKey,
			'position' => $this->position,
		]);
	}
}
