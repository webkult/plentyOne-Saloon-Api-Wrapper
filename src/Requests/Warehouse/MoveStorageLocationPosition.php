<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Move a storage location position
 *
 * Moves a storage location position
 */
class MoveStorageLocationPosition extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/positions";
	}


	/**
	 * @param int $toMove The storage location ID that needs needs to be moved
	 * @param int $target The storage location ID that stands as position for the storage location that needs to be moved
	 * @param string $side The actual position from the left or right side of target
	 */
	public function __construct(
		protected int $toMove,
		protected int $target,
		protected string $side,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['toMove' => $this->toMove, 'target' => $this->target, 'side' => $this->side]);
	}
}
