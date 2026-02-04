<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get date of an order item
 *
 * <b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b>
 * Gets a date of an order item.
 * The ID of the date must be specified. The following IDs are available:
 * <br><ul>
 * <li>1 = Deleted
 * on</li>
 * <li>2 = Created on</li>
 * <li>3 = Paid date</li>
 * <li>4 = Last update</li>
 * <li>5 = Completed
 * on</li>
 * <li>6 = Return date</li>
 * <li>7 = Payment due date</li>
 * <li>8 = Estimated shipping
 * date</li>
 * <li>9 = Start date</li>
 * <li>10 = End date</li>
 * <li>11 = Possible delivery date</li>
 * <li>12
 * = Market transfer date</li>
 * </ul>
 */
class GetDateOfOrderItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/dates/{$this->id}";
	}


	/**
	 * @param int $id The ID of the order item date
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
