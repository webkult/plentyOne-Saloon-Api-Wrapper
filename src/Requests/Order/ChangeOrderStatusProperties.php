<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Change order status properties
 *
 * Change properties of an order status. Properties are colour of the order status, visibility in the
 * online store and availability for orders of the type reorder or redistribution.
 */
class ChangeOrderStatusProperties extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/statuses/group_functions";
	}


	/**
	 * @param array $newStatusValues Set an array of new order status properties consisting of one key and one value for each property. The status colour must be set as a hexadecimal code. All other properties must be specified either by value 0 (inactive) or 1 (active).
	 * @param array $selectedStatusList Set a list with the IDs of the order statuses that should be changed.
	 */
	public function __construct(
		protected array $newStatusValues,
		protected array $selectedStatusList,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['newStatusValues' => $this->newStatusValues, 'selectedStatusList' => $this->selectedStatusList]);
	}
}
