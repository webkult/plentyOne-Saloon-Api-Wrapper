<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a name of an order date type
 *
 * Gets a name of an order date type. The ID of the date type must be specified. The language of the
 * order date type name must be specified by setting the ISO code of the language. The following IDs
 * are available:
 *
 * <br><ul>
 * <li>1 = Deleted on</li>
 * <li>2 = Created on</li>
 * <li>3 = Paid
 * date</li>
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
 * <li>13 =
 * Subscription cancelled on</li>
 * <li>14 = Subscription last run</li>
 * <li>15 = Subscription next
 * run</li>
 * </ul>
 */
class GetNameOfOrderDateType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/dates/types/{$this->typeId}/names/{$this->lang}";
	}


	/**
	 * @param int $typeId The ID of the order date type that should be found
	 * @param string $lang The language of the order date type name
	 */
	public function __construct(
		protected int $typeId,
		protected string $lang,
	) {
	}
}
