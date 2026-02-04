<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Search orders
 *
 * Searches for orders. The results can be restricted by using filters. For more information on the
 * order search, refer to the <a
 * href='https://developers.plentymarkets.com/en-gb/developers/main/rest-api-guides/order-search.html'
 * target='_blank'>REST API guide</a>.
 */
class SearchOrders extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/search";
	}


	/**
	 * @param null|int $orderId This filter restricts the search results to orders with a specific ID.
	 * @param null|int $plentyId This filter restricts the search results to orders with a specific plenty ID.
	 * @param null|string $orderTypeId This filter restricts the search results to orders with a specific order type ID.
	 * @param null|float|int $statusId This filter restricts the search results to orders with a specific status ID.
	 * @param null|float|int $referrerId This filter restricts the search results to orders with a specific referrer ID.
	 * @param null|int $ownerId This filter restricts the search results to orders with a specific owner ID.
	 * @param null|int $locationId This filter restricts the search results to orders with a specific location ID.
	 * @param null|string $updatedAt This filter restricts the search results to orders with a specific update date.
	 * @param null|string $createdAt This filter restricts the search results to orders with a specific creation date.
	 * @param null|string $lockStatus This filter restricts the search results to orders with a specific lock status.
	 * @param null|string $orderAddressData This filter restricts the search results to orders with specific address data.
	 * @param null|string $contactData This filter restricts the search results to orders with specific contact data.
	 * @param null|int $orderItemTypeId This filter restricts the search results to orders with a specific order item type ID.
	 * @param null|int $itemId This filter restricts the search results to orders including a specific item.
	 * @param null|int $itemVariationId This filter restricts the search results to orders including a specific item variation.
	 * @param null|string $variationNumber This filter restricts the search results to orders including a specific variation number.
	 * @param null|string $orderItemName This filter restricts the search results to orders including a specific order item name.
	 * @param null|string $documentNumber This filter restricts the search results to orders with a specific document number.
	 * @param null|bool $hasValidInvoice This filter restricts the search results to orders for which a valid invoice exists.
	 * @param null|string $packageNumber This filter restricts the search results to orders with a specific package number.
	 * @param null|int $contactClassId This filter restricts the search results to orders with a specific contact class ID.
	 * @param null|int $itemManufacturerId This filter restricts the search results to orders with a specific item manufacturer ID.
	 * @param null|int $orderItemWarehouseId This filter restricts the search results to orders with a specific order item warehouse ID.
	 * @param null|float|int $invoiceTotalSystemCurrency This filter restricts the search results to orders with a specific invoice total (in system currency).
	 * @param null|bool $isDeliveryAddressPackingStation This filter restricts the search results to orders for which the delivery address is a packing station.
	 * @param null|string $serialNumber This filter restricts the search results to orders with a specific serial number.
	 * @param null|bool $isGuestContact This filter restricts the search results to orders with a guest contact.
	 * @param null|int $variationSupplierId This filter restricts the search results to orders with a specific variation supplier ID.
	 * @param null|int $orderItemReferrerId This filter restricts the search results to orders with a specific order item referrer ID.
	 * @param null|int $tag This filter restricts the search results to orders with a specific tag.
	 * @param null|bool $excludeMainOrders This filter restricts the search results to orders for which no delivery orders exist.
	 * @param null|string $orderPropertyTypeId This filter restricts the search results to orders with an order property with a specific value. The order property type ID has to be replaced in the filter name.
	 * @param null|string $orderDateTypeId This filter restricts the search results to orders with an order date with a specific value. The order date type ID has to be replaced in the filter name.
	 * @param null|int $orderReferenceReferenceType This filter restricts the search results to orders with an order reference with a specific value. The order reference type has to be replaced in the filter name.
	 * @param null|int $orderItemReferenceReferenceType This filter restricts the search results to orders with an order item reference with a specific value. The order item reference type has to be replaced in the filter name.
	 * @param null|int $relationReferenceReferenceTypeRelationType This filter restricts the search results to orders with a relation reference with a specific value. The reference type and relation type has to be replaced in the filter name.
	 * @param null|string $soldCouponCode This filter restricts the search results to orders with a specific sold coupon code.
	 * @param null|string $redeemedCouponCode This filter restricts the search results to orders with a specific redeemed coupon code.
	 * @param null|int $orderBillingAddressCountryId This filter restricts the search results to orders with a specific invoice address country ID.
	 * @param null|int $orderDeliveryAddressCountryId This filter restricts the search results to orders with a specific delivery address country ID.
	 * @param null|string $documentNumberDocumentType This filter restricts the search results to orders with a document number with a specific value. The document type has to be replaced in the filter name.
	 * @param null|string $orderItemPropertyTypeId This filter restricts the search results to orders with an order item property with a specific value. The order property type ID has to be replaced in the filter name.
	 * @param null|int $addressRelationTypeId This filter restricts the search results to orders with an address relation with a specific value. The address relation type ID has to be replaced in the filter name.
	 * @param null|int $shippingServiceProviderId This filter restricts the search results to orders with a specific shipping service provider ID.
	 * @param null|string $shippingServiceProviderType This filter restricts the search results to orders with a specific shipping service provider type.
	 * @param null|string $shippingStatus This filter restricts the search results to orders with a specific shipping status.
	 * @param null|string $shippingShipmentDate This filter restricts the search results to orders with a specific shipment date.
	 * @param null|string $sortBy This field is used for sorting. Default is 'orderId'. Possible values are 'orderId', 'statusId', 'orderDeliveryAddressPostCode', 'invoiceNumber', 'orderDate_{2,3,5,8}', 'orderProperty_33'
	 * @param null|string $sortOrder The order to sort by. Possible values are 'asc' and 'desc'.
	 * @param null|int $page The page to get. The returned default page is page 1.
	 * @param null|int $itemsPerPage The number of orders to be displayed per page. The default number of orders displayed per page is 50.
	 * @param null|array $with Load additional relations for an order.
	 * @param null|bool $lazyLoaded If true, no default relations are loaded. Default = true.
	 */
	public function __construct(
		protected ?int $orderId = null,
		protected ?int $plentyId = null,
		protected ?string $orderTypeId = null,
		protected float|int|null $statusId = null,
		protected float|int|null $referrerId = null,
		protected ?int $ownerId = null,
		protected ?int $locationId = null,
		protected ?string $updatedAt = null,
		protected ?string $createdAt = null,
		protected ?string $lockStatus = null,
		protected ?string $orderAddressData = null,
		protected ?string $contactData = null,
		protected ?int $orderItemTypeId = null,
		protected ?int $itemId = null,
		protected ?int $itemVariationId = null,
		protected ?string $variationNumber = null,
		protected ?string $orderItemName = null,
		protected ?string $documentNumber = null,
		protected ?bool $hasValidInvoice = null,
		protected ?string $packageNumber = null,
		protected ?int $contactClassId = null,
		protected ?int $itemManufacturerId = null,
		protected ?int $orderItemWarehouseId = null,
		protected float|int|null $invoiceTotalSystemCurrency = null,
		protected ?bool $isDeliveryAddressPackingStation = null,
		protected ?string $serialNumber = null,
		protected ?bool $isGuestContact = null,
		protected ?int $variationSupplierId = null,
		protected ?int $orderItemReferrerId = null,
		protected ?int $tag = null,
		protected ?bool $excludeMainOrders = null,
		protected ?string $orderPropertyTypeId = null,
		protected ?string $orderDateTypeId = null,
		protected ?int $orderReferenceReferenceType = null,
		protected ?int $orderItemReferenceReferenceType = null,
		protected ?int $relationReferenceReferenceTypeRelationType = null,
		protected ?string $soldCouponCode = null,
		protected ?string $redeemedCouponCode = null,
		protected ?int $orderBillingAddressCountryId = null,
		protected ?int $orderDeliveryAddressCountryId = null,
		protected ?string $documentNumberDocumentType = null,
		protected ?string $orderItemPropertyTypeId = null,
		protected ?int $addressRelationTypeId = null,
		protected ?int $shippingServiceProviderId = null,
		protected ?string $shippingServiceProviderType = null,
		protected ?string $shippingStatus = null,
		protected ?string $shippingShipmentDate = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $with = null,
		protected ?bool $lazyLoaded = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'orderId' => $this->orderId,
			'plentyId' => $this->plentyId,
			'orderTypeId' => $this->orderTypeId,
			'statusId' => $this->statusId,
			'referrerId' => $this->referrerId,
			'ownerId' => $this->ownerId,
			'locationId' => $this->locationId,
			'updatedAt' => $this->updatedAt,
			'createdAt' => $this->createdAt,
			'lockStatus' => $this->lockStatus,
			'orderAddressData' => $this->orderAddressData,
			'contactData' => $this->contactData,
			'orderItemTypeId' => $this->orderItemTypeId,
			'itemId' => $this->itemId,
			'itemVariationId' => $this->itemVariationId,
			'variationNumber' => $this->variationNumber,
			'orderItemName' => $this->orderItemName,
			'documentNumber' => $this->documentNumber,
			'hasValidInvoice' => $this->hasValidInvoice,
			'packageNumber' => $this->packageNumber,
			'contactClassId' => $this->contactClassId,
			'itemManufacturerId' => $this->itemManufacturerId,
			'orderItemWarehouseId' => $this->orderItemWarehouseId,
			'invoiceTotalSystemCurrency' => $this->invoiceTotalSystemCurrency,
			'isDeliveryAddressPackingStation' => $this->isDeliveryAddressPackingStation,
			'serialNumber' => $this->serialNumber,
			'isGuestContact' => $this->isGuestContact,
			'variationSupplierId' => $this->variationSupplierId,
			'orderItemReferrerId' => $this->orderItemReferrerId,
			'tag' => $this->tag,
			'excludeMainOrders' => $this->excludeMainOrders,
			'orderProperty_{typeId}' => $this->orderPropertyTypeId,
			'orderDate_{typeId}' => $this->orderDateTypeId,
			'orderReference_{referenceType}' => $this->orderReferenceReferenceType,
			'orderItemReference_{referenceType}' => $this->orderItemReferenceReferenceType,
			'relationReference_{referenceType}_{relationType}' => $this->relationReferenceReferenceTypeRelationType,
			'soldCouponCode' => $this->soldCouponCode,
			'redeemedCouponCode' => $this->redeemedCouponCode,
			'orderBillingAddressCountryId' => $this->orderBillingAddressCountryId,
			'orderDeliveryAddressCountryId' => $this->orderDeliveryAddressCountryId,
			'documentNumber_{documentType}' => $this->documentNumberDocumentType,
			'orderItemProperty_{typeId}' => $this->orderItemPropertyTypeId,
			'addressRelation_{typeId}' => $this->addressRelationTypeId,
			'shippingServiceProviderId' => $this->shippingServiceProviderId,
			'shippingServiceProviderType' => $this->shippingServiceProviderType,
			'shippingStatus' => $this->shippingStatus,
			'shippingShipmentDate' => $this->shippingShipmentDate,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'with' => $this->with,
			'lazyLoaded' => $this->lazyLoaded,
		]);
	}
}
