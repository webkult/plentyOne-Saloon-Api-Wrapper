<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a date for an order item by order item and date type
 *
 * <b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b>
 * Creates a date for an order
 * item. The ID of the order item and the ID of the date type must be specified. The following order
 * item date type IDs are available:
 *
 * <br><ul>
 * <li>1 = Deleted on</li>
 * <li>2 = Created on</li>
 * <li>3 =
 * Paid date</li>
 * <li>4 = Last update</li>
 * <li>5 = Completed on</li>
 * <li>6 = Return date</li>
 * <li>7 =
 * Payment due date</li>
 * <li>8 = Estimated shipping date</li>
 * <li>9 = Start date</li>
 * <li>10 = End
 * date</li>
 * <li>11 = Possible delivery date</li>
 * <li>12 = Market transfer date</li>
 * </ul>
 */
class CreateDateForOrderItemByOrderItemAndDateType extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/{$this->orderItemId}/dates/{$this->typeId}";
	}


	/**
	 * @param int $orderItemId The ID of the order item
	 * @param int $typeId The ID of the order date type
	 */
	public function __construct(
		protected int $orderItemId,
		protected int $typeId,
	) {
	}
}
