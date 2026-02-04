<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update order item property
 *
 * <b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b>
 * Updates an order item
 * property. The order item ID and the order item property type ID must be specified. The following
 * property types are available by default:
 *
 * <br><ul>
 * <li>1 = WAREHOUSE</li>
 * <li>2 =
 * SHIPPING_PROFILE</li>
 * <li>3 = PAYMENT_METHOD</li>
 * <li>11 = WEIGHT</li>
 * <li>12 = WIDTH</li>
 * <li>13 =
 * LENGTH</li>
 * <li>14 = HEIGHT</li>
 * <li>16 = EXTERNAL_TOKEN_ID</li>
 * <li>17 =
 * EXTERNAL_ITEM_ID</li>
 * <li>18 = COUPON_CODE</li>
 * <li>19 = COUPON_TYPE</li>
 * <li>20 =
 * ORIGINAL_WAREHOUSE</li>
 * <li>21 = ORIGINAL_QUANTITY</li>
 * <li>22 = CATEGORY_ID</li>
 * <li>23 =
 * MARKET_FEE</li>
 * <li>24 = STOCK_REVERSING</li>
 * <li>25 = DISPUTE_STATUS</li>
 * <li>26 =
 * NO_CHANGE_BY_CONTACT</li>
 * <li>29 = SIZE</li>
 * <li>30 = LOCATION_RESERVED</li>
 * <li>31 =
 * EXTERNAL_SHIPMENT_ITEM_ID</li>
 * <li>32 = PARTIAL_SHIPPING_COSTS</li>
 * <li>33 =
 * MAIN_DOCUMENT_NUMBER</li>
 * <li>34 = SALES_TAX_ID_NUMBER</li>
 * <li>35 = RETURNS_REASON</li>
 * <li>36 =
 * RETURNS_ITEM_STATUS</li>
 * <li>37 = FULFILLMENT_CENTER_ID</li>
 * <li>38 =
 * FULFILLMENT_CENTER_COUNTRY_ISO</li>
 * <li>39 = REORDER_ITEM_ID</li>
 * <li>40 = LISTING_TYPE</li>
 * <li>46
 * = SOLD_COUPON_CODE</li>
 * <li>48 = ORDER_ITEM_STATE</li>
 * </ul>
 */
class UpdateOrderItemProperty extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/{$this->orderItemId}/properties/{$this->typeId}";
	}


	/**
	 * @param int $orderItemId The order item ID.
	 * @param int $typeId The order item property type ID.
	 */
	public function __construct(
		protected int $orderItemId,
		protected int $typeId,
	) {
	}
}
