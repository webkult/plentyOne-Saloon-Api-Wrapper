<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all shipping profiles of all items
 *
 * Lists all shipping profiles of all items. Results can be filtered by the timestamp of the link
 * between items and shipping profiles (eq, lt, lte, gt, gte, between).
 * <ul>
 * <li>eq = Equal
 * to</li>
 * <li>gte = Greater than or equal to</li>
 * <li>gt = Greater than</li>
 * <li>lte = Less than or
 * equal to</li>
 * <li>lt = Less than</li>
 * <li>between = Date range</li>
 * </ul>
 * Example:
 * updated=gt:2018-04-16 16:00:00 returns all items with shipping profiles that were activated after
 * 4pm on the 16th of April 2018.
 */
class ListAllShippingProfilesOfAllItems extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/item_shipping_profiles";
	}


	public function __construct()
	{
	}
}
