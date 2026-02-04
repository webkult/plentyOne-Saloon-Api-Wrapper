<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search order
 *
 * <b>DEPRECATED: Use the following route: GET /rest/orders/search</b>
 * Searches for orders. The results
 * can be restricted by using filter options.
 */
class SearchOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders";
	}


	/**
	 * @param null|string $orderType Filter that restricts the search result to orders of specific order types. The ID of the order types must be specified. Several order type IDs can be entered separated by commas. @see order model typeId
	 * @param null|int $contactId Filter that restricts the search result to orders of a contact. The ID of the contact must be specified.
	 * @param null|string $contactData Filter that restricts the search result to orders with a specific contact data.
	 * @param null|float|int $referrerId Filter that restricts the search result to orders of a specific order referrer. The ID of the order referrer must be specified.
	 * @param null|int $shippingProfileId Filter that restricts the search result to orders with a specific shipping profile. The ID of shipping profile must be specified.
	 * @param null|int $shippingServiceProviderId Filter that restricts the search result to orders with a specific shipping service provider (like DHL, UPS, etc.). The ID of shipping service provider must be specified.
	 * @param null|int $ownerUserId Filter that restricts the search result to orders with a specific owner. The user ID of the owner must be specified.
	 * @param null|int $warehouseId Filter that restricts the search result to orders with a specific main warehouse. The ID of the warehouse must be specified.
	 * @param null|bool $isEbayPlus Filter that restricts the search result to orders with the referrer eBay PLUS.
	 * @param null|int $includedVariation Filter that restricts the search result to orders including a specific variation. The ID of the variation must be specified.
	 * @param null|int $includedItem Filter that restricts the search result to orders including a specific item. The ID of the item must be specified.
	 * @param null|array $orderIds Filter that restricts the search result to orders with a specific ID. To list several orders, the order IDs must be enetered separated by commas.
	 * @param null|int $countryId Filter that restricts the search result to orders with a specific delivery or invoice country. The ID of the country must be specified.
	 * @param null|string $orderItemName Filter that restricts the search result to orders including a specific item name. The name of the item must be specified.
	 * @param null|int $variationNumber Filter that restricts the search result to orders including a specific variation number. The number of the variation must be specified.
	 * @param null|string $packageNumber Filter that restricts the search result to orders including a specific package number. The number of the package must be specified.
	 * @param null|int $senderContact Filter that restricts the search result to orders including a specific sender of the type contact. For example, the supplier is a sender of the type contact for reorders. The ID of the sender must be specified.
	 * @param null|int $senderWarehouse Filter that restricts the search result to orders including a specific sender of the type warehouse. For example, the sending warehouse is a sender of the type warehouse for redistributions. The ID of the sender must be specified.
	 * @param null|int $receiverContact Filter that restricts the search result to orders including a specific receiver of the type contact. For example, a receiver of the type contact is the recipient of a main order. The ID of the receiver must be specified.
	 * @param null|int $receiverWarehouse Filter that restricts the search result to orders with a specific receiver of the type warehouse. TFor example, the receiving receiving warehouse is a receiver of the type warehouse for redistributions. The ID of the receiver must be specified.
	 * @param null|string $externalOrderId Filter that restricts the search result to orders including a specific external order ID. The external order ID must be specified.
	 * @param null|int $clientId Filter that restricts the search result to orders belonging to a specific client. The ID of the client must be specified.
	 * @param null|string $paymentStatus Filter that restricts the search result to orders with a specific payment status. Valid values are unpaid, partlyPaid, fullyPaid, overpaid. One of these values must be specified.
	 * @param null|string $updatedAtFrom Filter that restricts the search result to orders that were last updated on a specified date. This filter can be used alone or can be combined with the UpdatedAtTo filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $updatedAtTo Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $createdAtFrom Filter that restricts the search result to orders that were created from a specified date up to the present date. This filter can be used alone or can be combined with the CreatedAtTo filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $createdAtTo Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $paidAtFrom Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $paidAtTo Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $outgoingItemsBookedAtFrom Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $outgoingItemsBookedAtTo Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|float|int $statusFrom Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified.
	 * @param null|float|int $statusTo Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified.
	 * @param null|string $hasDocument Filter that restricts the search result to orders which hold the given document type. Valid values are <i>multi_invoice</i>, <i>multi_credit_note</i>, <i>success_confirmation</i>, <i>return_note</i>, <i>pickup_delivery</i>, <i>repair_bill</i>, <i>dunning_letter</i>, <i>offer</i>, <i>order_confirmation</i>, <i>credit_note</i>, <i>correction_document</i>, <i>delivery_note</i>, <i>invoice</i>, <i>invoice_external</i>, <i>receipt</i>
	 * @param null|string $hasDocumentNumber Filter that restricts the search result to orders which hold documents with given number.
	 * @param null|int $parentOrderId Filter that restricts the search result to orders which have the given order ID as parent.
	 * @param null|bool $addOrderItems Add the order items to the results. Default = true.
	 * @param null|string $externalItemId Filter that restricts the search result to orders that have order items with the given external item ID.
	 * @param null|int $page The page to get. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
	 * @param null|array $with Load additional relations for an order. Currently possible are:
	 *     <ul>
	 *     <li>'addresses' = The address objects that are associated with the order.</li>
	 *     <li>'relations' = The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.</li>
	 *     <li>'comments' = The order comments.</li>
	 *     <li>'location' = The accounting location of the order.</li>
	 *     <li>'payments' = The payments that are associated with the order.</li>
	 *     <li>'documents' = The documents that are associated with the order.</li>
	 *     <li>'contactSender' = The associated contact for the contact-sender relation.</li>
	 *     <li>'contactReceiver' = The associated contact for the contact-receiver relation.</li>
	 *     <li>'warehouseSender' = The associated warehouse for the warehouse-sender relation.</li>
	 *     <li>'warehouseReceiver' = The associated warehouse for the warehouse-receiver relation.</li>
	 *     <li>'orderItems.variation' = The variation that is associated with the order item.</li>
	 *     <li>'orderItems.variation.propertiesV2' = The properties belonging to the variation.</li>
	 *     <li>'orderItems.giftCardCodes' = The gift card codes that are associated with the order item.</li>
	 *     <li>'orderItems.transactions' = The transactions that are associated with the order item.</li>
	 *     <li>'orderItems.serialNumbers' = The serial numbers that are associated with the order item.</li>
	 *     <li>'orderItems.variationBarcodes' = The barcodes that are associated with variation of the order item.</li>
	 *     <li>'orderItems.comments' = The comments that are associated with the order item.</li>
	 *     <li>'originOrderReferences' = The references to other orders, e.g. returns or credit notes, associated with this order.</li>
	 *     <li>'shippingPackages' = The shipping packages that are associated with the order.</li>
	 *     <li>'shippingPackages.items' = The orderPackageItems associated with the package.</li>
	 *     <li>'shippingInformation' = The shipping information for the order.</li>
	 *     <li>'paymentTerms' = The payment terms that are associated with the order.</li>
	 *     <li><b>deprecated</b> 'orderItems.warehouseLocations' = The warehouse locations that are associated with the order item.</li>
	 *     </ul>
	 *     Example: <code>?with[]=addresses&with[]=orderItems.variation</code>
	 * @param null|string $sortBy Sort the result. Possible values are
	 *      <ul>
	 *         <li>'id': Sort by order ID (default)</li>
	 *         <li>'statusId': Sort by order status ID</li>
	 *         <li>'createdAt': Sort by order creation date</li>
	 *         <li>'orderDocument': Sort by order document number</li>
	 *      </ul>
	 * @param null|string $sortOrder Sorting behaviour. Possible values are
	 *      <ul>
	 *         <li>'asc': Sort by ascending order (default)</li>
	 *         <li>'desc': Sort by descending order</li>
	 *      </ul>
	 */
	public function __construct(
		protected ?string $orderType = null,
		protected ?int $contactId = null,
		protected ?string $contactData = null,
		protected float|int|null $referrerId = null,
		protected ?int $shippingProfileId = null,
		protected ?int $shippingServiceProviderId = null,
		protected ?int $ownerUserId = null,
		protected ?int $warehouseId = null,
		protected ?bool $isEbayPlus = null,
		protected ?int $includedVariation = null,
		protected ?int $includedItem = null,
		protected ?array $orderIds = null,
		protected ?int $countryId = null,
		protected ?string $orderItemName = null,
		protected ?int $variationNumber = null,
		protected ?string $packageNumber = null,
		protected ?int $senderContact = null,
		protected ?int $senderWarehouse = null,
		protected ?int $receiverContact = null,
		protected ?int $receiverWarehouse = null,
		protected ?string $externalOrderId = null,
		protected ?int $clientId = null,
		protected ?string $paymentStatus = null,
		protected ?string $updatedAtFrom = null,
		protected ?string $updatedAtTo = null,
		protected ?string $createdAtFrom = null,
		protected ?string $createdAtTo = null,
		protected ?string $paidAtFrom = null,
		protected ?string $paidAtTo = null,
		protected ?string $outgoingItemsBookedAtFrom = null,
		protected ?string $outgoingItemsBookedAtTo = null,
		protected float|int|null $statusFrom = null,
		protected float|int|null $statusTo = null,
		protected ?string $hasDocument = null,
		protected ?string $hasDocumentNumber = null,
		protected ?int $parentOrderId = null,
		protected ?bool $addOrderItems = null,
		protected ?string $externalItemId = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $with = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'orderType' => $this->orderType,
			'contactId' => $this->contactId,
			'contactData' => $this->contactData,
			'referrerId' => $this->referrerId,
			'shippingProfileId' => $this->shippingProfileId,
			'shippingServiceProviderId' => $this->shippingServiceProviderId,
			'ownerUserId' => $this->ownerUserId,
			'warehouseId' => $this->warehouseId,
			'isEbayPlus' => $this->isEbayPlus,
			'includedVariation' => $this->includedVariation,
			'includedItem' => $this->includedItem,
			'orderIds' => $this->orderIds,
			'countryId' => $this->countryId,
			'orderItemName' => $this->orderItemName,
			'variationNumber' => $this->variationNumber,
			'packageNumber' => $this->packageNumber,
			'sender.contact' => $this->senderContact,
			'sender.warehouse' => $this->senderWarehouse,
			'receiver.contact' => $this->receiverContact,
			'receiver.warehouse' => $this->receiverWarehouse,
			'externalOrderId' => $this->externalOrderId,
			'clientId' => $this->clientId,
			'paymentStatus' => $this->paymentStatus,
			'updatedAtFrom' => $this->updatedAtFrom,
			'updatedAtTo' => $this->updatedAtTo,
			'createdAtFrom' => $this->createdAtFrom,
			'createdAtTo' => $this->createdAtTo,
			'paidAtFrom' => $this->paidAtFrom,
			'paidAtTo' => $this->paidAtTo,
			'outgoingItemsBookedAtFrom' => $this->outgoingItemsBookedAtFrom,
			'outgoingItemsBookedAtTo' => $this->outgoingItemsBookedAtTo,
			'statusFrom' => $this->statusFrom,
			'statusTo' => $this->statusTo,
			'hasDocument' => $this->hasDocument,
			'hasDocumentNumber' => $this->hasDocumentNumber,
			'parentOrderId' => $this->parentOrderId,
			'addOrderItems' => $this->addOrderItems,
			'externalItemId' => $this->externalItemId,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'with' => $this->with,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
		]);
	}
}
