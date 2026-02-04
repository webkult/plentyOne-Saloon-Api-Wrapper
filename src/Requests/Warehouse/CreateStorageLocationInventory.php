<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a storage location inventory
 *
 * Creates a storage location inventory.
 */
class CreateStorageLocationInventory extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/inventory";
	}


	/**
	 * @param int $status The storage location inventory status
	 */
	public function __construct(
		protected int $status,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['status' => $this->status]);
	}
}
