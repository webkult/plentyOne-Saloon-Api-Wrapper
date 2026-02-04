<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an order
 *
 * Gets an order. The ID of the order must be specified.
 */
class GetOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}";
	}


	/**
	 * @param int $orderId The ID of the order.
	 * @param null|array $with Load additional relations for an order. The following relations are available:
	 *      * <ul>
	 *        <li>'addresses' = The address objects linked to the order.</li>
	 *        <li>'relations' = The order relation reference instances that are associated with the order. These instances contain information such as the reference type. The available reference types are parent and reorder. The ID of the reference and the relation itself are also available.</li>
	 *        <li>'comments' = The order comments.</li>
	 *        <li>'location' = The accounting location linked to the order.</li>
	 *        <li>'payments' = The payments linked to the order.</li>
	 *        <li>'documents' = The documents linked to the order.</li>
	 *        <li>'contactSender' = The contact belonging the contact-sender relation.</li>
	 *        <li>'contactReceiver' = The contact belonging to the contact-receiver relation.</li>
	 *        <li>'warehouseSender' = The warehouse belonging to the warehouse-sender relation.</li>
	 *        <li>'warehouseReceiver' = The warehouse belonging to the warehouse-receiver relation.</li>
	 *        <li>'orderItems.variation' = The variation data belonging to the order item.</li>
	 *        <li>'orderItems.variation.propertiesV2' = The properties belonging to the variation.</li>
	 *        <li>'orderItems.giftCardCodes' = The gift card codes belonging to the order item.</li>
	 *        <li>'orderItems.transactions' = The transactions belonging to the order item.</li>
	 *        <li>'orderItems.serialNumbers' = The serial numbers belonging to the order item.</li>
	 *        <li>'orderItems.variationBarcodes' = The barcodes belonging to the order item.</li>
	 *        <li>'orderItems.comments' = The comments belonging to the order item.</li>
	 *        <li>'shippingPallets' = The shipping pallets that are associated with the order.</li>
	 *        <li>'shippingPackages' = The shipping packages that are associated with the order.</li>
	 *        <li>'paymentTerms' = The payment terms that are associated with the order.</li>
	 *        <li><b>deprecated</b> 'orderItems.warehouseLocations' = The warehouse locations linked to the order item.</li>
	 *      </ul>
	 *      Example: <code>?with[]=addresses&with[]=orderItems.variation</code>
	 * @param null|bool $addOrderItems Add the order items to the result. Default = true.
	 */
	public function __construct(
		protected int $orderId,
		protected ?array $with = null,
		protected ?bool $addOrderItems = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'addOrderItems' => $this->addOrderItems]);
	}
}
