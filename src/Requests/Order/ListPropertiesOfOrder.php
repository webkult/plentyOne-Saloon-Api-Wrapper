<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List properties of an order
 *
 * <b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b>
 * Lists properties of an order.
 * The ID of the order must be specified. Optionally, the ID of the property type can be specified. The
 * following property types are available by default:
 *
 * <br><ul>
 * <li>1 = WAREHOUSE</li>
 * <li>2 =
 * SHIPPING_PROFILE</li>
 * <li>3 = PAYMENT_METHOD</li>
 * <li>4 = PAYMENT_STATUS</li>
 * <li>5 =
 * EXTERNAL_SHIPPING_PROFILE</li>
 * <li>6 = DOCUMENT_LANGUAGE</li>
 * <li>7 = EXTERNAL_ORDER_ID</li>
 * <li>8 =
 * CUSTOMER_SIGN</li>
 * <li>9 = DUNNING_LEVEL</li>
 * <li>10 = SELLER_ACCOUNT</li>
 * <li>11 =
 * WEIGHT</li>
 * <li>12 = WIDTH</li>
 * <li>13 = LENGTH</li>
 * <li>14 = HEIGHT</li>
 * <li>15 = FLAG</li>
 * <li>16
 * = EXTERNAL_TOKEN_ID</li>
 * <li>17 = EXTERNAL_ITEM_ID</li>
 * <li>18 = COUPON_CODE</li>
 * <li>19 =
 * COUPON_TYPE</li>
 * <li>33 = MAIN_DOCUMENT_NUMBER</li>
 * <li>34 = SALES_TAX_ID_NUMBER</li>
 * <li>45 =
 * PAYMENT_TRANSACTION_ID</li>
 * <li>47 = EXTERNAL_TAX_SERVICE</li>
 * <li>60 = MERCHANT_ID</li>
 * <li>61 =
 * REPORT_ID</li>
 * <li>63 = PREFERRED_STORAGE_LOCATION_ID</li>
 * <li>64 =
 * AMAZON_SHIPPING_LABEL</li>
 * <li>994 = EBAY_PLUS</li>
 * <li>995 = FULFILLMENT_SERVICE</li>
 * </ul>
 */
class ListPropertiesOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/properties/{$this->typeId}";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $typeId The property type ID
	 */
	public function __construct(
		protected int $orderId,
		protected int $typeId,
	) {
	}
}
