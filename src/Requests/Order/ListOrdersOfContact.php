<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List orders of a contact
 *
 * Lists all orders of a contact. The ID of the contact must be specified.
 */
class ListOrdersOfContact extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/contacts/{$this->contactId}";
	}


	/**
	 * @param int $contactId The ID of the contact.
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
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
	 *        <li>'shippingPackages' = The shipping packages that are associated with the order.</li>
	 *        <li>'paymentTerms' = The payment terms that are associated with the order.</li>
	 *        <li><b>deprecated</b> 'orderItems.warehouseLocations' = The warehouse locations linked to the order item.</li>
	 *      </ul>
	 *     Example: <code>?with[]=addresses&with[]=orderItems.variation</code>
	 */
	public function __construct(
		protected int $contactId,
		protected int $page,
		protected int $itemsPerPage,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage, 'with' => $this->with]);
	}
}
