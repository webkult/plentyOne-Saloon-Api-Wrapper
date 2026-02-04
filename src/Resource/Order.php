<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Order\AttachWarehouseLocations;
use PlentyOne\Api\Requests\Order\BookOrderIn;
use PlentyOne\Api\Requests\Order\BookOrderItemIn;
use PlentyOne\Api\Requests\Order\BookOrderItemTransactions;
use PlentyOne\Api\Requests\Order\BookOrderItemsOfReturn;
use PlentyOne\Api\Requests\Order\BookOutOrderItems;
use PlentyOne\Api\Requests\Order\CalculateAndSaveTheDeliveryDates;
use PlentyOne\Api\Requests\Order\CancelOrder;
use PlentyOne\Api\Requests\Order\CancelShipment;
use PlentyOne\Api\Requests\Order\ChangeOrderItemOfTypeUnassignedVariationToVariation;
use PlentyOne\Api\Requests\Order\ChangeOrderItemOfTypeVariationToUnassignedVariation;
use PlentyOne\Api\Requests\Order\ChangeOrderStatusProperties;
use PlentyOne\Api\Requests\Order\ConvertAdvanceOrderIntoSalesOrder;
use PlentyOne\Api\Requests\Order\ConvertSalesOrderIntoAdvanceOrder;
use PlentyOne\Api\Requests\Order\CreateAdvanceOrder;
use PlentyOne\Api\Requests\Order\CreateAdvanceOrderFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateCouponCode;
use PlentyOne\Api\Requests\Order\CreateCreditNote;
use PlentyOne\Api\Requests\Order\CreateCreditNoteFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateDateForOrderItem;
use PlentyOne\Api\Requests\Order\CreateDateForOrderItemByOrderItemAndDateType;
use PlentyOne\Api\Requests\Order\CreateDeliveryOrder;
use PlentyOne\Api\Requests\Order\CreateDeliveryOrderFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateDeliveryOrdersAutomaticallyForAllOrderItems;
use PlentyOne\Api\Requests\Order\CreateItemSerialNumberAndBindItToOrderItem;
use PlentyOne\Api\Requests\Order\CreateMultiOrder;
use PlentyOne\Api\Requests\Order\CreateOffer;
use PlentyOne\Api\Requests\Order\CreateOfferFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateOrder;
use PlentyOne\Api\Requests\Order\CreateOrderForTodayForGivenSubscription;
use PlentyOne\Api\Requests\Order\CreateOrderItemProperty;
use PlentyOne\Api\Requests\Order\CreateOrderItemTransaction;
use PlentyOne\Api\Requests\Order\CreateOrderItemTransactionsForOrder;
use PlentyOne\Api\Requests\Order\CreateOrderPropertyType;
use PlentyOne\Api\Requests\Order\CreateOrderReferrer;
use PlentyOne\Api\Requests\Order\CreateOrderShippingPackage;
use PlentyOne\Api\Requests\Order\CreateOrderShippingPallets;
use PlentyOne\Api\Requests\Order\CreatePackageVariationOrQuantityForOrder;
use PlentyOne\Api\Requests\Order\CreatePropertyForOrder;
use PlentyOne\Api\Requests\Order\CreateRedistribution;
use PlentyOne\Api\Requests\Order\CreateRedistributionFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateReorder;
use PlentyOne\Api\Requests\Order\CreateReorderFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateReorderSForOrder;
use PlentyOne\Api\Requests\Order\CreateRepair;
use PlentyOne\Api\Requests\Order\CreateRepairOrderFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateReturn;
use PlentyOne\Api\Requests\Order\CreateReturnFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateSalesOrder;
use PlentyOne\Api\Requests\Order\CreateSalesOrderFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateShippingInformation;
use PlentyOne\Api\Requests\Order\CreateSubscription;
use PlentyOne\Api\Requests\Order\CreateSubscriptionFromParentOrder;
use PlentyOne\Api\Requests\Order\CreateTaricVatAssignment;
use PlentyOne\Api\Requests\Order\CreateUpdateReorderSForOrderItems;
use PlentyOne\Api\Requests\Order\CreateWarranty;
use PlentyOne\Api\Requests\Order\CreateWarrantyFromParentOrder;
use PlentyOne\Api\Requests\Order\CreatesOrderStatus;
use PlentyOne\Api\Requests\Order\DeleteAdvanceOrder;
use PlentyOne\Api\Requests\Order\DeleteAllOrderShippingPackagesForOrder;
use PlentyOne\Api\Requests\Order\DeleteAllOrderShippingPackagesInPallet;
use PlentyOne\Api\Requests\Order\DeleteAllPalletsOfOrder;
use PlentyOne\Api\Requests\Order\DeleteCoupon;
use PlentyOne\Api\Requests\Order\DeleteCreditNote;
use PlentyOne\Api\Requests\Order\DeleteDateOfOrderItem;
use PlentyOne\Api\Requests\Order\DeleteDateOfOrderItemByOrderItemAndDateType;
use PlentyOne\Api\Requests\Order\DeleteDeliveryOrder;
use PlentyOne\Api\Requests\Order\DeleteItemsOfOrderPackage;
use PlentyOne\Api\Requests\Order\DeleteMultiCreditNote;
use PlentyOne\Api\Requests\Order\DeleteMultiSalesOrder;
use PlentyOne\Api\Requests\Order\DeleteOffer;
use PlentyOne\Api\Requests\Order\DeleteOrder;
use PlentyOne\Api\Requests\Order\DeleteOrderItem;
use PlentyOne\Api\Requests\Order\DeleteOrderItemProperty;
use PlentyOne\Api\Requests\Order\DeleteOrderItemTransaction;
use PlentyOne\Api\Requests\Order\DeleteOrderRepairReason;
use PlentyOne\Api\Requests\Order\DeleteOrderRepairStatus;
use PlentyOne\Api\Requests\Order\DeleteOrderReturnReason;
use PlentyOne\Api\Requests\Order\DeleteOrderReturnStatus;
use PlentyOne\Api\Requests\Order\DeleteOrderShippingPackage;
use PlentyOne\Api\Requests\Order\DeleteOrderStatus;
use PlentyOne\Api\Requests\Order\DeletePackageVariationOrQuantityForOrder;
use PlentyOne\Api\Requests\Order\DeletePropertyOfOrderByOrderIdAndPropertyTypeId;
use PlentyOne\Api\Requests\Order\DeletePropertyOfOrderByPropertyId;
use PlentyOne\Api\Requests\Order\DeletePropertyType;
use PlentyOne\Api\Requests\Order\DeleteRedistribution;
use PlentyOne\Api\Requests\Order\DeleteReferrer;
use PlentyOne\Api\Requests\Order\DeleteReorder;
use PlentyOne\Api\Requests\Order\DeleteRepair;
use PlentyOne\Api\Requests\Order\DeleteReturn;
use PlentyOne\Api\Requests\Order\DeleteSalesOrder;
use PlentyOne\Api\Requests\Order\DeleteShippingInformation;
use PlentyOne\Api\Requests\Order\DeleteSubscription;
use PlentyOne\Api\Requests\Order\DeleteTaricVatAssignment;
use PlentyOne\Api\Requests\Order\DeleteWarranty;
use PlentyOne\Api\Requests\Order\DetachWarehouseLocations;
use PlentyOne\Api\Requests\Order\DisableOrEnableCoupon;
use PlentyOne\Api\Requests\Order\FindOrderDateType;
use PlentyOne\Api\Requests\Order\GetAdvanceOrderCreatePreview;
use PlentyOne\Api\Requests\Order\GetAdvanceOrderUpdatePreview;
use PlentyOne\Api\Requests\Order\GetAllOrderItemProperties;
use PlentyOne\Api\Requests\Order\GetAllOrderRepairReasons;
use PlentyOne\Api\Requests\Order\GetAllOrderRepairStatus;
use PlentyOne\Api\Requests\Order\GetAllOrderReturnReasons;
use PlentyOne\Api\Requests\Order\GetAllOrderReturnStatus;
use PlentyOne\Api\Requests\Order\GetAllOrderStatuses;
use PlentyOne\Api\Requests\Order\GetAllThePackagesForTheGivenOrder;
use PlentyOne\Api\Requests\Order\GetAllThePackagesForTheGivenPalletId;
use PlentyOne\Api\Requests\Order\GetCampaignById;
use PlentyOne\Api\Requests\Order\GetContactWish;
use PlentyOne\Api\Requests\Order\GetCouponCodeInformation;
use PlentyOne\Api\Requests\Order\GetCreditNoteCreatePreview;
use PlentyOne\Api\Requests\Order\GetCreditNoteUpdatePreview;
use PlentyOne\Api\Requests\Order\GetCurrency;
use PlentyOne\Api\Requests\Order\GetCurrencyForCountry;
use PlentyOne\Api\Requests\Order\GetDate;
use PlentyOne\Api\Requests\Order\GetDateOfOrderItem;
use PlentyOne\Api\Requests\Order\GetDateOfOrderItemByOrderItemAndDateType;
use PlentyOne\Api\Requests\Order\GetDeliveryOrderCreatePreview;
use PlentyOne\Api\Requests\Order\GetDeliveryOrderUpdatePreview;
use PlentyOne\Api\Requests\Order\GetExportLabel;
use PlentyOne\Api\Requests\Order\GetInformationAboutTheOrderFamily;
use PlentyOne\Api\Requests\Order\GetListOfCampaigns;
use PlentyOne\Api\Requests\Order\GetMyAccountUrlOfTheOrder;
use PlentyOne\Api\Requests\Order\GetNameOfOrderDateType;
use PlentyOne\Api\Requests\Order\GetNextFreeMainReferrerId;
use PlentyOne\Api\Requests\Order\GetOfferCreatePreview;
use PlentyOne\Api\Requests\Order\GetOfferUpdatePreview;
use PlentyOne\Api\Requests\Order\GetOrder;
use PlentyOne\Api\Requests\Order\GetOrderItemProperty;
use PlentyOne\Api\Requests\Order\GetOrderParcelServiceRegion;
use PlentyOne\Api\Requests\Order\GetOrderRepairReason;
use PlentyOne\Api\Requests\Order\GetOrderRepairStatus;
use PlentyOne\Api\Requests\Order\GetOrderReturnReason;
use PlentyOne\Api\Requests\Order\GetOrderReturnStatus;
use PlentyOne\Api\Requests\Order\GetOrderShippingPackage;
use PlentyOne\Api\Requests\Order\GetOrderStatus;
use PlentyOne\Api\Requests\Order\GetOrders;
use PlentyOne\Api\Requests\Order\GetPackedItemsInPackage;
use PlentyOne\Api\Requests\Order\GetPreviewList;
use PlentyOne\Api\Requests\Order\GetPropertyType;
use PlentyOne\Api\Requests\Order\GetRedistributionCreatePreview;
use PlentyOne\Api\Requests\Order\GetRedistributionUpdatePreview;
use PlentyOne\Api\Requests\Order\GetReferrer;
use PlentyOne\Api\Requests\Order\GetReorderCreatePreview;
use PlentyOne\Api\Requests\Order\GetReorderUpdatePreview;
use PlentyOne\Api\Requests\Order\GetRepairOrderCreatePreview;
use PlentyOne\Api\Requests\Order\GetRepairOrderUpdatePreview;
use PlentyOne\Api\Requests\Order\GetReturnCreatePreview;
use PlentyOne\Api\Requests\Order\GetReturnUpdatePreview;
use PlentyOne\Api\Requests\Order\GetReturnsServiceProviderByTheId;
use PlentyOne\Api\Requests\Order\GetSalesOrderCreateIncompletePreview;
use PlentyOne\Api\Requests\Order\GetSalesOrderCreatePreview;
use PlentyOne\Api\Requests\Order\GetSalesOrderUpdatePreview;
use PlentyOne\Api\Requests\Order\GetShippingInformation;
use PlentyOne\Api\Requests\Order\GetShippingPackageType;
use PlentyOne\Api\Requests\Order\GetShippingProfile;
use PlentyOne\Api\Requests\Order\GetShippingServiceProvider;
use PlentyOne\Api\Requests\Order\GetSubscriptionCreatePreview;
use PlentyOne\Api\Requests\Order\GetSubscriptionUpdatePreview;
use PlentyOne\Api\Requests\Order\GetTaricVatAssignment;
use PlentyOne\Api\Requests\Order\GetTheDeliveryDate;
use PlentyOne\Api\Requests\Order\GetTheExchangeRateForCurrency;
use PlentyOne\Api\Requests\Order\GetTheExchangeRatesFromCurrency;
use PlentyOne\Api\Requests\Order\GetTheExchangeRatesToCurrency;
use PlentyOne\Api\Requests\Order\GetTheListOfActiveShippingServiceProvidersForRegistration;
use PlentyOne\Api\Requests\Order\GetTheStatusHistoryOfOrder;
use PlentyOne\Api\Requests\Order\GetWarrantyCreatePreview;
use PlentyOne\Api\Requests\Order\GetWarrantyUpdatePreview;
use PlentyOne\Api\Requests\Order\GroupMultipleOrdersInOneOrder;
use PlentyOne\Api\Requests\Order\ListAllDatesOfOrder;
use PlentyOne\Api\Requests\Order\ListAllDatesOfOrderItem;
use PlentyOne\Api\Requests\Order\ListAllPackagesContainedInPalletsOfOrder;
use PlentyOne\Api\Requests\Order\ListAllPalletsOfOrder;
use PlentyOne\Api\Requests\Order\ListCountriesForCurrency;
use PlentyOne\Api\Requests\Order\ListCurrencies;
use PlentyOne\Api\Requests\Order\ListDocumentAccountingSummaries;
use PlentyOne\Api\Requests\Order\ListItemsContainedInPackagePalletsOfOrder;
use PlentyOne\Api\Requests\Order\ListItemsContainedInPackagesOfOrder;
use PlentyOne\Api\Requests\Order\ListItemsOfOrderPackage;
use PlentyOne\Api\Requests\Order\ListNamesOfOrderDateType;
use PlentyOne\Api\Requests\Order\ListOrderDateTypes;
use PlentyOne\Api\Requests\Order\ListOrderItemTransactions;
use PlentyOne\Api\Requests\Order\ListOrderPropertyTypes;
use PlentyOne\Api\Requests\Order\ListOrderShippingPackages;
use PlentyOne\Api\Requests\Order\ListOrderShippingPallets;
use PlentyOne\Api\Requests\Order\ListOrdersOfContact;
use PlentyOne\Api\Requests\Order\ListOrdersWithShippingInformation;
use PlentyOne\Api\Requests\Order\ListPackageNumbersOfOrder;
use PlentyOne\Api\Requests\Order\ListPackedItemsOfShippingPackageByTheOrderId;
use PlentyOne\Api\Requests\Order\ListParcelServiceRegionsByParcelServicePresetId;
use PlentyOne\Api\Requests\Order\ListPropertiesOfOrder;
use PlentyOne\Api\Requests\Order\ListRedeemedCouponCodesOfContact;
use PlentyOne\Api\Requests\Order\ListReferrers;
use PlentyOne\Api\Requests\Order\ListReturnsServiceProviderPlugins;
use PlentyOne\Api\Requests\Order\ListReturnsServiceProviders;
use PlentyOne\Api\Requests\Order\ListSerialNumbersOfOrder;
use PlentyOne\Api\Requests\Order\ListSerialNumbersOfOrderItem;
use PlentyOne\Api\Requests\Order\ListShippingCountries;
use PlentyOne\Api\Requests\Order\ListShippingPackageTypes;
use PlentyOne\Api\Requests\Order\ListShippingProfiles;
use PlentyOne\Api\Requests\Order\ListShippingServiceProviderPlugins;
use PlentyOne\Api\Requests\Order\ListShippingServiceProviders;
use PlentyOne\Api\Requests\Order\ListStatusHistoriesOfOrders;
use PlentyOne\Api\Requests\Order\ListTaricVatAssignments;
use PlentyOne\Api\Requests\Order\ListUnpackedItemsFromOrder;
use PlentyOne\Api\Requests\Order\ListUnpackedItemsOfShippingPackageByTheOrderId;
use PlentyOne\Api\Requests\Order\RedeemCouponCode;
use PlentyOne\Api\Requests\Order\RegisterShipment;
use PlentyOne\Api\Requests\Order\ResetShipment;
use PlentyOne\Api\Requests\Order\ReturnPaginatedListContainingOrdersWithShippingInformation;
use PlentyOne\Api\Requests\Order\RevertOutgoingStock;
use PlentyOne\Api\Requests\Order\RevertOutgoingStockForOrderItems;
use PlentyOne\Api\Requests\Order\SaveShippingServiceProvider;
use PlentyOne\Api\Requests\Order\SearchForReferrers;
use PlentyOne\Api\Requests\Order\SearchOrder;
use PlentyOne\Api\Requests\Order\SearchOrderItemTransactions;
use PlentyOne\Api\Requests\Order\SearchOrderItems;
use PlentyOne\Api\Requests\Order\SearchOrders;
use PlentyOne\Api\Requests\Order\SearchesForOrderStatuses;
use PlentyOne\Api\Requests\Order\SetOrderRepairReason;
use PlentyOne\Api\Requests\Order\SetOrderRepairStatus;
use PlentyOne\Api\Requests\Order\SetOrderReturnReason;
use PlentyOne\Api\Requests\Order\SetOrderReturnStatus;
use PlentyOne\Api\Requests\Order\SplitSalesOrderIntoAtLeastTwoSalesOrders;
use PlentyOne\Api\Requests\Order\UpdateAdditionalDataOfTheShippingInformation;
use PlentyOne\Api\Requests\Order\UpdateAdvanceOrder;
use PlentyOne\Api\Requests\Order\UpdateAllPackagesInPallet;
use PlentyOne\Api\Requests\Order\UpdateAllPalletsOfOrder;
use PlentyOne\Api\Requests\Order\UpdateCreditNote;
use PlentyOne\Api\Requests\Order\UpdateDateOfOrderItem;
use PlentyOne\Api\Requests\Order\UpdateDateOfOrderItemByOrderItemAndDateType;
use PlentyOne\Api\Requests\Order\UpdateDeliveryOrder;
use PlentyOne\Api\Requests\Order\UpdateItemsOfOrderPackage;
use PlentyOne\Api\Requests\Order\UpdateMultiCreditNote;
use PlentyOne\Api\Requests\Order\UpdateMultiOrder;
use PlentyOne\Api\Requests\Order\UpdateOffer;
use PlentyOne\Api\Requests\Order\UpdateOrder;
use PlentyOne\Api\Requests\Order\UpdateOrderItemProperty;
use PlentyOne\Api\Requests\Order\UpdateOrderItemTransaction;
use PlentyOne\Api\Requests\Order\UpdateOrderShippingPackage;
use PlentyOne\Api\Requests\Order\UpdateOrderShippingPackageByThePackageId;
use PlentyOne\Api\Requests\Order\UpdateOrderStatus;
use PlentyOne\Api\Requests\Order\UpdatePackageVariationOrQuantityForOrder;
use PlentyOne\Api\Requests\Order\UpdatePropertyOfOrderByOrderIdAndPropertyId;
use PlentyOne\Api\Requests\Order\UpdatePropertyOfOrderByPropertyId;
use PlentyOne\Api\Requests\Order\UpdatePropertyType;
use PlentyOne\Api\Requests\Order\UpdateRedistribution;
use PlentyOne\Api\Requests\Order\UpdateReferrer;
use PlentyOne\Api\Requests\Order\UpdateReorder;
use PlentyOne\Api\Requests\Order\UpdateRepair;
use PlentyOne\Api\Requests\Order\UpdateReturn;
use PlentyOne\Api\Requests\Order\UpdateSalesOrder;
use PlentyOne\Api\Requests\Order\UpdateSubscription;
use PlentyOne\Api\Requests\Order\UpdateTaricVatAssignment;
use PlentyOne\Api\Requests\Order\UpdateTheCurrency;
use PlentyOne\Api\Requests\Order\UpdateTheOrderCurrency;
use PlentyOne\Api\Requests\Order\UpdateTheShippingStatusOfTheShippingInformation;
use PlentyOne\Api\Requests\Order\UpdateWarranty;
use PlentyOne\Api\Requests\Order\ValidateBookingOfReturn;
use PlentyOne\Api\Requests\Order\ValidateCancellationOfTheBookingOfOrder;
use PlentyOne\Api\Requests\Order\ValidateCoupon;
use PlentyOne\Api\Requests\Order\ValidateCouponForOrder;
use PlentyOne\Api\Requests\Order\ValidateMultipleCoupons;
use PlentyOne\Api\Requests\Order\ValidateOrderItemsForCreateCreditNoteFromParentOrder;
use PlentyOne\Api\Requests\Order\ValidateOrderItemsForCreateDeliveryOrderFromParentOrder;
use PlentyOne\Api\Requests\Order\ValidateOrderItemsForCreateReorderFromSalesOrderDeliveryOrderRepairAndWarranty;
use PlentyOne\Api\Requests\Order\ValidateOrderItemsForCreateRepairFromParentOrder;
use PlentyOne\Api\Requests\Order\ValidateOrderItemsForCreateReturnFromParentOrder;
use PlentyOne\Api\Requests\Order\ValidateOrderItemsForCreateSalesOrderFromParentOrder;
use PlentyOne\Api\Requests\Order\ValidateOrderItemsForCreateWarrantyFromParentOrder;
use PlentyOne\Api\Requests\Order\ValidateOrderItemsForSubscriptionCreationFromParentOrder;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Order extends BaseResource
{
	public function createAdvanceOrder(): Response
	{
		return $this->connector->send(new CreateAdvanceOrder());
	}


	/**
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeUnassignedVariationToVariation(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeUnassignedVariationToVariation($orderItemId));
	}


	/**
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeVariationToUnassignedVariation(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeVariationToUnassignedVariation($orderItemId));
	}


	public function getAdvanceOrderCreatePreview(): Response
	{
		return $this->connector->send(new GetAdvanceOrderCreatePreview());
	}


	/**
	 * @param int $orderId
	 */
	public function updateAdvanceOrder(int $orderId): Response
	{
		return $this->connector->send(new UpdateAdvanceOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteAdvanceOrder(int $orderId): Response
	{
		return $this->connector->send(new DeleteAdvanceOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getAdvanceOrderUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetAdvanceOrderUpdatePreview($orderId));
	}


	public function createCreditNote(): Response
	{
		return $this->connector->send(new CreateCreditNote());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeUnassignedVariationToVariationDuplicate1(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeUnassignedVariationToVariation($orderItemId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeVariationToUnassignedVariationDuplicate2(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeVariationToUnassignedVariation($orderItemId));
	}


	public function getCreditNoteCreatePreview(): Response
	{
		return $this->connector->send(new GetCreditNoteCreatePreview());
	}


	/**
	 * @param int $orderId
	 */
	public function updateCreditNote(int $orderId): Response
	{
		return $this->connector->send(new UpdateCreditNote($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteCreditNote(int $orderId): Response
	{
		return $this->connector->send(new DeleteCreditNote($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getCreditNoteUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetCreditNoteUpdatePreview($orderId));
	}


	public function createDeliveryOrder(): Response
	{
		return $this->connector->send(new CreateDeliveryOrder());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeUnassignedVariationToVariationDuplicate3(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeUnassignedVariationToVariation($orderItemId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeVariationToUnassignedVariationDuplicate4(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeVariationToUnassignedVariation($orderItemId));
	}


	public function getDeliveryOrderCreatePreview(): Response
	{
		return $this->connector->send(new GetDeliveryOrderCreatePreview());
	}


	/**
	 * @param int $orderId
	 */
	public function updateDeliveryOrder(int $orderId): Response
	{
		return $this->connector->send(new UpdateDeliveryOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteDeliveryOrder(int $orderId): Response
	{
		return $this->connector->send(new DeleteDeliveryOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function bookOutOrderItems(int $orderId): Response
	{
		return $this->connector->send(new BookOutOrderItems($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function revertOutgoingStock(int $orderId): Response
	{
		return $this->connector->send(new RevertOutgoingStock($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateCancellationOfTheBookingOfOrder(int $orderId): Response
	{
		return $this->connector->send(new ValidateCancellationOfTheBookingOfOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getDeliveryOrderUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetDeliveryOrderUpdatePreview($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function updateMultiCreditNote(int $orderId): Response
	{
		return $this->connector->send(new UpdateMultiCreditNote($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteMultiCreditNote(int $orderId): Response
	{
		return $this->connector->send(new DeleteMultiCreditNote($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function updateMultiOrder(int $orderId): Response
	{
		return $this->connector->send(new UpdateMultiOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteMultiSalesOrder(int $orderId): Response
	{
		return $this->connector->send(new DeleteMultiSalesOrder($orderId));
	}


	public function createOffer(): Response
	{
		return $this->connector->send(new CreateOffer());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeUnassignedVariationToVariationDuplicate5(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeUnassignedVariationToVariation($orderItemId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeVariationToUnassignedVariationDuplicate6(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeVariationToUnassignedVariation($orderItemId));
	}


	public function getOfferCreatePreview(): Response
	{
		return $this->connector->send(new GetOfferCreatePreview());
	}


	/**
	 * @param int $orderId
	 */
	public function updateOffer(int $orderId): Response
	{
		return $this->connector->send(new UpdateOffer($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteOffer(int $orderId): Response
	{
		return $this->connector->send(new DeleteOffer($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getOfferUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetOfferUpdatePreview($orderId));
	}


	/**
	 * @param string $orderType Filter that restricts the search result to orders of specific order types. The ID of the order types must be specified. Several order type IDs can be entered separated by commas. @see order model typeId
	 * @param int $contactId Filter that restricts the search result to orders of a contact. The ID of the contact must be specified.
	 * @param string $contactData Filter that restricts the search result to orders with a specific contact data.
	 * @param float|int $referrerId Filter that restricts the search result to orders of a specific order referrer. The ID of the order referrer must be specified.
	 * @param int $shippingProfileId Filter that restricts the search result to orders with a specific shipping profile. The ID of shipping profile must be specified.
	 * @param int $shippingServiceProviderId Filter that restricts the search result to orders with a specific shipping service provider (like DHL, UPS, etc.). The ID of shipping service provider must be specified.
	 * @param int $ownerUserId Filter that restricts the search result to orders with a specific owner. The user ID of the owner must be specified.
	 * @param int $warehouseId Filter that restricts the search result to orders with a specific main warehouse. The ID of the warehouse must be specified.
	 * @param bool $isEbayPlus Filter that restricts the search result to orders with the referrer eBay PLUS.
	 * @param int $includedVariation Filter that restricts the search result to orders including a specific variation. The ID of the variation must be specified.
	 * @param int $includedItem Filter that restricts the search result to orders including a specific item. The ID of the item must be specified.
	 * @param array $orderIds Filter that restricts the search result to orders with a specific ID. To list several orders, the order IDs must be enetered separated by commas.
	 * @param int $countryId Filter that restricts the search result to orders with a specific delivery or invoice country. The ID of the country must be specified.
	 * @param string $orderItemName Filter that restricts the search result to orders including a specific item name. The name of the item must be specified.
	 * @param int $variationNumber Filter that restricts the search result to orders including a specific variation number. The number of the variation must be specified.
	 * @param string $packageNumber Filter that restricts the search result to orders including a specific package number. The number of the package must be specified.
	 * @param int $senderContact Filter that restricts the search result to orders including a specific sender of the type contact. For example, the supplier is a sender of the type contact for reorders. The ID of the sender must be specified.
	 * @param int $senderWarehouse Filter that restricts the search result to orders including a specific sender of the type warehouse. For example, the sending warehouse is a sender of the type warehouse for redistributions. The ID of the sender must be specified.
	 * @param int $receiverContact Filter that restricts the search result to orders including a specific receiver of the type contact. For example, a receiver of the type contact is the recipient of a main order. The ID of the receiver must be specified.
	 * @param int $receiverWarehouse Filter that restricts the search result to orders with a specific receiver of the type warehouse. TFor example, the receiving receiving warehouse is a receiver of the type warehouse for redistributions. The ID of the receiver must be specified.
	 * @param string $externalOrderId Filter that restricts the search result to orders including a specific external order ID. The external order ID must be specified.
	 * @param int $clientId Filter that restricts the search result to orders belonging to a specific client. The ID of the client must be specified.
	 * @param string $paymentStatus Filter that restricts the search result to orders with a specific payment status. Valid values are unpaid, partlyPaid, fullyPaid, overpaid. One of these values must be specified.
	 * @param string $updatedAtFrom Filter that restricts the search result to orders that were last updated on a specified date. This filter can be used alone or can be combined with the UpdatedAtTo filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $createdAtFrom Filter that restricts the search result to orders that were created from a specified date up to the present date. This filter can be used alone or can be combined with the CreatedAtTo filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $createdAtTo Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $paidAtFrom Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $paidAtTo Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $outgoingItemsBookedAtFrom Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $outgoingItemsBookedAtTo Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param float|int $statusFrom Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified.
	 * @param float|int $statusTo Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified.
	 * @param string $hasDocument Filter that restricts the search result to orders which hold the given document type. Valid values are <i>multi_invoice</i>, <i>multi_credit_note</i>, <i>success_confirmation</i>, <i>return_note</i>, <i>pickup_delivery</i>, <i>repair_bill</i>, <i>dunning_letter</i>, <i>offer</i>, <i>order_confirmation</i>, <i>credit_note</i>, <i>correction_document</i>, <i>delivery_note</i>, <i>invoice</i>, <i>invoice_external</i>, <i>receipt</i>
	 * @param string $hasDocumentNumber Filter that restricts the search result to orders which hold documents with given number.
	 * @param int $parentOrderId Filter that restricts the search result to orders which have the given order ID as parent.
	 * @param bool $addOrderItems Add the order items to the results. Default = true.
	 * @param string $externalItemId Filter that restricts the search result to orders that have order items with the given external item ID.
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
	 * @param array $with Load additional relations for an order. Currently possible are:
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
	 * @param string $sortBy Sort the result. Possible values are
	 *      <ul>
	 *         <li>'id': Sort by order ID (default)</li>
	 *         <li>'statusId': Sort by order status ID</li>
	 *         <li>'createdAt': Sort by order creation date</li>
	 *         <li>'orderDocument': Sort by order document number</li>
	 *      </ul>
	 * @param string $sortOrder Sorting behaviour. Possible values are
	 *      <ul>
	 *         <li>'asc': Sort by ascending order (default)</li>
	 *         <li>'desc': Sort by descending order</li>
	 *      </ul>
	 */
	public function searchOrder(
		?string $orderType = null,
		?int $contactId = null,
		?string $contactData = null,
		float|int|null $referrerId = null,
		?int $shippingProfileId = null,
		?int $shippingServiceProviderId = null,
		?int $ownerUserId = null,
		?int $warehouseId = null,
		?bool $isEbayPlus = null,
		?int $includedVariation = null,
		?int $includedItem = null,
		?array $orderIds = null,
		?int $countryId = null,
		?string $orderItemName = null,
		?int $variationNumber = null,
		?string $packageNumber = null,
		?int $senderContact = null,
		?int $senderWarehouse = null,
		?int $receiverContact = null,
		?int $receiverWarehouse = null,
		?string $externalOrderId = null,
		?int $clientId = null,
		?string $paymentStatus = null,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?string $paidAtFrom = null,
		?string $paidAtTo = null,
		?string $outgoingItemsBookedAtFrom = null,
		?string $outgoingItemsBookedAtTo = null,
		float|int|null $statusFrom = null,
		float|int|null $statusTo = null,
		?string $hasDocument = null,
		?string $hasDocumentNumber = null,
		?int $parentOrderId = null,
		?bool $addOrderItems = null,
		?string $externalItemId = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $with = null,
		?string $sortBy = null,
		?string $sortOrder = null,
	): Response
	{
		return $this->connector->send(new SearchOrder($orderType, $contactId, $contactData, $referrerId, $shippingProfileId, $shippingServiceProviderId, $ownerUserId, $warehouseId, $isEbayPlus, $includedVariation, $includedItem, $orderIds, $countryId, $orderItemName, $variationNumber, $packageNumber, $senderContact, $senderWarehouse, $receiverContact, $receiverWarehouse, $externalOrderId, $clientId, $paymentStatus, $updatedAtFrom, $updatedAtTo, $createdAtFrom, $createdAtTo, $paidAtFrom, $paidAtTo, $outgoingItemsBookedAtFrom, $outgoingItemsBookedAtTo, $statusFrom, $statusTo, $hasDocument, $hasDocumentNumber, $parentOrderId, $addOrderItems, $externalItemId, $page, $itemsPerPage, $with, $sortBy, $sortOrder));
	}


	/**
	 * @param array $coupon One or multiple coupon code to be redeemed with order creation
	 */
	public function createOrder(?array $coupon = null): Response
	{
		return $this->connector->send(new CreateOrder($coupon));
	}


	/**
	 * @param array $orderIds The IDs of the orders.
	 * @param array $with Load additional relations for an order. The following relations are available:
	 *      * <ul>
	 *     <li>'addresses' = The address objects linked to the order.</li>
	 *     <li>'relations' = The order relation reference instances that are associated with the order. These instances contain information such as the reference type. The available reference types are parent and reorder. The ID of the reference and the relation itself are also available.</li>
	 *     <li>'comments' = The order comments.</li>
	 *     <li>'location' = The accounting location linked to the order.</li>
	 *     <li>'payments' = The payments linked to the order.</li>
	 *     <li>'documents' = The documents linked to the order.</li>
	 *     <li>'contactSender' = The contact belonging the contact-sender relation.</li>
	 *     <li>'contactReceiver' = The contact belonging to the contact-receiver relation.</li>
	 *     <li>'warehouseSender' = The warehouse belonging to the warehouse-sender relation.</li>
	 *     <li>'warehouseReceiver' = The warehouse belonging to the warehouse-receiver relation.</li>
	 *     <li>'orderItems.variation' = The variation data belonging to the order item.</li>
	 *     <li>'orderItems.variation.propertiesV2' = The properties belonging to the variation.</li>
	 *     <li>'orderItems.giftCardCodes' = The gift card codes belonging to the order item.</li>
	 *     <li>'orderItems.transactions' = The transactions belonging to the order item.</li>
	 *     <li>'orderItems.serialNumbers' = The serial numbers belonging to the order item.</li>
	 *     <li>'orderItems.variationBarcodes' = The barcodes belonging to the order item.</li>
	 *     <li>'orderItems.comments' = The comments belonging to the order item.</li>
	 *     <li>'shippingPackages' = The shipping packages that are associated with the order.</li>
	 *     <li>'paymentTerms' = The payment terms that are associated with the order.</li>
	 *     <li><b>deprecated</b> 'orderItems.warehouseLocations' = The warehouse locations linked to the order item.</li>
	 *     </ul>
	 *     Example: <code>?with[]=addresses&with[]=orderItems.variation</code>
	 * @param bool $addOrderItems Add the order items to the result. Default = true.
	 */
	public function getOrders(array $orderIds, ?array $with = null, ?bool $addOrderItems = null): Response
	{
		return $this->connector->send(new GetOrders($orderIds, $with, $addOrderItems));
	}


	/**
	 * @param int $contactId The ID of the contact.
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
	 * @param array $with Load additional relations for an order. The following relations are available:
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
	public function listOrdersOfContact(int $contactId, int $page, int $itemsPerPage, ?array $with = null): Response
	{
		return $this->connector->send(new ListOrdersOfContact($contactId, $page, $itemsPerPage, $with));
	}


	/**
	 * @param int $contactId
	 */
	public function createMultiOrder(int $contactId): Response
	{
		return $this->connector->send(new CreateMultiOrder($contactId));
	}


	public function getListOfCampaigns(): Response
	{
		return $this->connector->send(new GetListOfCampaigns());
	}


	/**
	 * @param string $code The coupon code
	 * @param string $with Load additional relations for a coupon code.
	 *      *     Currently possible are:
	 *      * <ul>
	 *      *   <li>'campaign' = The coupon campaign to which this code belongs to.</li>
	 *      * </ul>
	 *      * Example: <code>?with=campaign</code>
	 */
	public function getCouponCodeInformation(string $code, ?string $with = null): Response
	{
		return $this->connector->send(new GetCouponCodeInformation($code, $with));
	}


	/**
	 * @param int $code
	 * @param int $withoutUsed Do not delete used coupons
	 */
	public function deleteCoupon(int $code, ?int $withoutUsed = null): Response
	{
		return $this->connector->send(new DeleteCoupon($code, $withoutUsed));
	}


	/**
	 * @param int $code
	 * @param int $isDisabled
	 */
	public function disableOrEnableCoupon(int $code, int $isDisabled): Response
	{
		return $this->connector->send(new DisableOrEnableCoupon($code, $isDisabled));
	}


	/**
	 * @param int $campaignId
	 */
	public function getCampaignById(int $campaignId): Response
	{
		return $this->connector->send(new GetCampaignById($campaignId));
	}


	/**
	 * @param int $campaignId
	 */
	public function createCouponCode(int $campaignId): Response
	{
		return $this->connector->send(new CreateCouponCode($campaignId));
	}


	/**
	 * @param array $coupons The coupons to validate.
	 * @param bool $callFromScheduler Flag that indicates whether the validation is requested by a subscription order or not. TRUE = The validation is requested by a subscription order. FALSE = The validation is not requested by a subscription order.
	 * @param int $plentyId The plenty id.
	 * @param int $shipToCountry The country of delivery.
	 * @param string $taxIdNumber The tax id number.
	 * @param int $contactClass The contact class.
	 * @param int $contactType The contact type.
	 */
	public function validateMultipleCoupons(
		array $coupons,
		?bool $callFromScheduler = null,
		int $plentyId,
		int $shipToCountry,
		?string $taxIdNumber = null,
		?int $contactClass = null,
		?int $contactType = null,
	): Response
	{
		return $this->connector->send(new ValidateMultipleCoupons($coupons, $callFromScheduler, $plentyId, $shipToCountry, $taxIdNumber, $contactClass, $contactType));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of coupons to be displayed per page. The default number of coupons per page is 50.
	 */
	public function listRedeemedCouponCodesOfContact(
		int $contactId,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new ListRedeemedCouponCodesOfContact($contactId, $page, $itemsPerPage));
	}


	/**
	 * @param string $coupon The coupon to validate.
	 * @param bool $callFromScheduler Flag that indicates whether the validation is requested by a subscription order or not. TRUE = The validation is requested by a subscription order. FALSE = The validation is not requested by a subscription order.
	 * @param int $plentyId The plenty id.
	 * @param int $shipToCountry The country of delivery.
	 * @param string $taxIdNumber The tax id number.
	 * @param int $contactClass The contact class.
	 * @param int $contactType The contact type.
	 */
	public function validateCoupon(
		string $coupon,
		?bool $callFromScheduler = null,
		int $plentyId,
		int $shipToCountry,
		?string $taxIdNumber = null,
		?int $contactClass = null,
		?int $contactType = null,
	): Response
	{
		return $this->connector->send(new ValidateCoupon($coupon, $callFromScheduler, $plentyId, $shipToCountry, $taxIdNumber, $contactClass, $contactType));
	}


	/**
	 * @param array $columns The attributes to be loaded
	 * @param array $with The relations to be loaded. Valid relations are 'names' or 'countries'.
	 */
	public function listCurrencies(?array $columns = null, ?array $with = null): Response
	{
		return $this->connector->send(new ListCurrencies($columns, $with));
	}


	/**
	 * @param int $countryId
	 * @param array $columns The attributes to be loaded
	 * @param array $with The relations to be loaded. Valid relations are 'names' or 'countries').
	 */
	public function getCurrencyForCountry(int $countryId, ?array $columns = null, ?array $with = null): Response
	{
		return $this->connector->send(new GetCurrencyForCountry($countryId, $columns, $with));
	}


	/**
	 * @param int $currencyIso
	 */
	public function getTheExchangeRatesFromCurrency(int $currencyIso): Response
	{
		return $this->connector->send(new GetTheExchangeRatesFromCurrency($currencyIso));
	}


	/**
	 * @param int $currencyIso
	 */
	public function getTheExchangeRatesToCurrency(int $currencyIso): Response
	{
		return $this->connector->send(new GetTheExchangeRatesToCurrency($currencyIso));
	}


	/**
	 * @param string $currencyIso The ISO 4217 code of the currency
	 * @param array $columns The attributes to be loaded
	 * @param array $with The relations to be loaded. Valid relations are 'names' or 'countries'
	 */
	public function getCurrency(string $currencyIso, ?array $columns = null, ?array $with = null): Response
	{
		return $this->connector->send(new GetCurrency($currencyIso, $columns, $with));
	}


	/**
	 * @param string $currencyIso The ISO 4217 code of the currency
	 * @param array $columns The attributes to be loaded
	 */
	public function listCountriesForCurrency(string $currencyIso, ?array $columns = null): Response
	{
		return $this->connector->send(new ListCountriesForCurrency($currencyIso, $columns));
	}


	/**
	 * @param int $currencyIso
	 */
	public function getTheExchangeRateForCurrency(int $currencyIso): Response
	{
		return $this->connector->send(new GetTheExchangeRateForCurrency($currencyIso));
	}


	public function listOrderDateTypes(): Response
	{
		return $this->connector->send(new ListOrderDateTypes());
	}


	/**
	 * @param int $typeId
	 */
	public function findOrderDateType(int $typeId): Response
	{
		return $this->connector->send(new FindOrderDateType($typeId));
	}


	/**
	 * @param int $typeId The Id of the OrderDateType to be found
	 */
	public function listNamesOfOrderDateType(int $typeId): Response
	{
		return $this->connector->send(new ListNamesOfOrderDateType($typeId));
	}


	/**
	 * @param int $typeId The ID of the order date type that should be found
	 * @param string $lang The language of the order date type name
	 */
	public function getNameOfOrderDateType(int $typeId, string $lang): Response
	{
		return $this->connector->send(new GetNameOfOrderDateType($typeId, $lang));
	}


	/**
	 * @param int $orderId The ID of the order.
	 * @param string $documentType The document type. The types that can be returned are the following: reversal_document (reversal document for an invoice) and reversal_refund (reversal document for an invoice).
	 * @param string $createdAtFrom Get entries with createdAt date after this date.
	 * @param string $createdAtTo Get entries with createdAt date before this date.
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of summaries that should be displayed per page. The default number of orders per page is 10.
	 */
	public function listDocumentAccountingSummaries(
		?int $orderId = null,
		?string $documentType = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new ListDocumentAccountingSummaries($orderId, $documentType, $createdAtFrom, $createdAtTo, $page, $itemsPerPage));
	}


	public function createDateForOrderItem(): Response
	{
		return $this->connector->send(new CreateDateForOrderItem());
	}


	/**
	 * @param int $id The ID of the order item date
	 */
	public function getDateOfOrderItem(int $id): Response
	{
		return $this->connector->send(new GetDateOfOrderItem($id));
	}


	/**
	 * @param int $id The ID of the order item date
	 */
	public function updateDateOfOrderItem(int $id): Response
	{
		return $this->connector->send(new UpdateDateOfOrderItem($id));
	}


	/**
	 * @param int $id The ID of the order item date
	 */
	public function deleteDateOfOrderItem(int $id): Response
	{
		return $this->connector->send(new DeleteDateOfOrderItem($id));
	}


	public function revertOutgoingStockForOrderItems(): Response
	{
		return $this->connector->send(new RevertOutgoingStockForOrderItems());
	}


	public function createOrderItemProperty(): Response
	{
		return $this->connector->send(new CreateOrderItemProperty());
	}


	/**
	 * @param int $id The ID of the order item property.
	 */
	public function getOrderItemProperty(int $id): Response
	{
		return $this->connector->send(new GetOrderItemProperty($id));
	}


	/**
	 * @param int $id The ID of the order item property instance to be updated.
	 */
	public function updateOrderItemProperty(int $id): Response
	{
		return $this->connector->send(new UpdateOrderItemProperty($id));
	}


	/**
	 * @param int $id The ID of the order item property.
	 */
	public function deleteOrderItemProperty(int $id): Response
	{
		return $this->connector->send(new DeleteOrderItemProperty($id));
	}


	/**
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
	 * @param array $columns Specifies the properties of the order item transactions to be loaded.
	 * @param array $with Loads additional relations of the order item transactions. The available relations are 'orderItem' and 'warehouseLocation'.
	 * @param string $sortBy Sort search result according to createdAt, updatedAt, orderItemId, receiptId or quantity. The default value is orderItemId.
	 * @param string $sortOrder Sort direction desc or asc. The default value is asc.
	 * @param int $orderItemId The ID of the order item
	 * @param int $orderId The ID of the order
	 * @param string $direction The direction of the order item transactions
	 * @param string $status The status of the order item transactions ('in' for incoming or 'out' for outgoing)
	 * @param bool $isBooked Returns all booked order item transactions.
	 */
	public function searchOrderItemTransactions(
		?int $page = null,
		?int $itemsPerPage = null,
		?array $columns = null,
		?array $with = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?int $orderItemId = null,
		?int $orderId = null,
		?string $direction = null,
		?string $status = null,
		?bool $isBooked = null,
	): Response
	{
		return $this->connector->send(new SearchOrderItemTransactions($page, $itemsPerPage, $columns, $with, $sortBy, $sortOrder, $orderItemId, $orderId, $direction, $status, $isBooked));
	}


	/**
	 * @param array $transactionIds The IDs of the order item transactions.
	 * @param string $deliveryNoteNumber If desired, set a delivery note number. The delivery note number has to match the type of order item transaction. For incoming items, set an external delivery note number. For outgoing items, set an external or an internal delivery note number.
	 */
	public function bookOrderItemTransactions(array $transactionIds, ?string $deliveryNoteNumber = null): Response
	{
		return $this->connector->send(new BookOrderItemTransactions($transactionIds, $deliveryNoteNumber));
	}


	/**
	 * @param int $transactionId
	 */
	public function updateOrderItemTransaction(int $transactionId): Response
	{
		return $this->connector->send(new UpdateOrderItemTransaction($transactionId));
	}


	/**
	 * @param int $transactionId
	 */
	public function deleteOrderItemTransaction(int $transactionId): Response
	{
		return $this->connector->send(new DeleteOrderItemTransaction($transactionId));
	}


	/**
	 * @param int $orderItemId The ID of the order item.
	 * @param string $deliveryNoteNumber If desired, set the delivery note number provided by the supplier.
	 */
	public function bookOrderItemIn(int $orderItemId, ?string $deliveryNoteNumber = null): Response
	{
		return $this->connector->send(new BookOrderItemIn($orderItemId, $deliveryNoteNumber));
	}


	/**
	 * @param int $orderItemId The ID of the order item
	 */
	public function listAllDatesOfOrderItem(int $orderItemId): Response
	{
		return $this->connector->send(new ListAllDatesOfOrderItem($orderItemId));
	}


	/**
	 * @param int $orderItemId The ID of the order item
	 * @param int $typeId The ID of the order date type
	 */
	public function getDateOfOrderItemByOrderItemAndDateType(int $orderItemId, int $typeId): Response
	{
		return $this->connector->send(new GetDateOfOrderItemByOrderItemAndDateType($orderItemId, $typeId));
	}


	/**
	 * @param int $orderItemId The ID of the order item
	 * @param int $typeId The ID of the order date type
	 */
	public function updateDateOfOrderItemByOrderItemAndDateType(int $orderItemId, int $typeId): Response
	{
		return $this->connector->send(new UpdateDateOfOrderItemByOrderItemAndDateType($orderItemId, $typeId));
	}


	/**
	 * @param int $orderItemId The ID of the order item
	 * @param int $typeId The ID of the order date type
	 */
	public function createDateForOrderItemByOrderItemAndDateType(int $orderItemId, int $typeId): Response
	{
		return $this->connector->send(new CreateDateForOrderItemByOrderItemAndDateType($orderItemId, $typeId));
	}


	/**
	 * @param int $orderItemId The ID of the order item
	 * @param int $typeId The ID of the order date
	 */
	public function deleteDateOfOrderItemByOrderItemAndDateType(int $orderItemId, int $typeId): Response
	{
		return $this->connector->send(new DeleteDateOfOrderItemByOrderItemAndDateType($orderItemId, $typeId));
	}


	/**
	 * @param int $orderItemId The order item ID.
	 */
	public function getAllOrderItemProperties(int $orderItemId): Response
	{
		return $this->connector->send(new GetAllOrderItemProperties($orderItemId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId The ID of the order item.
	 * @param int $typeId The ID of the order item property type.
	 */
	public function getOrderItemPropertyDuplicate7(int $orderItemId, int $typeId): Response
	{
		return $this->connector->send(new GetOrderItemProperty($orderItemId, $typeId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId The order item ID.
	 * @param int $typeId The order item property type ID.
	 */
	public function updateOrderItemPropertyDuplicate8(int $orderItemId, int $typeId): Response
	{
		return $this->connector->send(new UpdateOrderItemProperty($orderItemId, $typeId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId The order item ID.
	 * @param int $typeId The order item property type ID.
	 */
	public function createOrderItemPropertyDuplicate9(int $orderItemId, int $typeId): Response
	{
		return $this->connector->send(new CreateOrderItemProperty($orderItemId, $typeId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId The order item ID.
	 * @param int $typeId The order item property type ID.
	 */
	public function deleteOrderItemPropertyDuplicate10(int $orderItemId, int $typeId): Response
	{
		return $this->connector->send(new DeleteOrderItemProperty($orderItemId, $typeId));
	}


	/**
	 * @param int $orderItemId The ID of the order item
	 * @param array $columns The properties to be loaded
	 * @param array $with Load additional relations for a transaction. Currently possible are 'orderItem' and 'warehouseLocation'.
	 */
	public function listOrderItemTransactions(int $orderItemId, ?array $columns = null, ?array $with = null): Response
	{
		return $this->connector->send(new ListOrderItemTransactions($orderItemId, $columns, $with));
	}


	/**
	 * @param int $orderItemId
	 */
	public function createOrderItemTransaction(int $orderItemId): Response
	{
		return $this->connector->send(new CreateOrderItemTransaction($orderItemId));
	}


	/**
	 * @param array $lang If no parameter is set here, all languages are loaded by default. Optionally, enter an arry containing the ISO codes of the desired languages.
	 */
	public function listOrderPropertyTypes(?array $lang = null): Response
	{
		return $this->connector->send(new ListOrderPropertyTypes($lang));
	}


	public function createOrderPropertyType(): Response
	{
		return $this->connector->send(new CreateOrderPropertyType());
	}


	/**
	 * @param int $typeId The ID of the type.
	 * @param array $lang If no parameter is set here, all languages for the property are loaded by default. Optionally, enter an arry containing the ISO codes of the desired languages.
	 */
	public function getPropertyType(int $typeId, ?array $lang = null): Response
	{
		return $this->connector->send(new GetPropertyType($typeId, $lang));
	}


	/**
	 * @param int $typeId
	 */
	public function updatePropertyType(int $typeId): Response
	{
		return $this->connector->send(new UpdatePropertyType($typeId));
	}


	/**
	 * @param int $typeId The ID of the property type
	 */
	public function deletePropertyType(int $typeId): Response
	{
		return $this->connector->send(new DeletePropertyType($typeId));
	}


	/**
	 * @param int $id
	 */
	public function updatePropertyOfOrderByPropertyId(int $id): Response
	{
		return $this->connector->send(new UpdatePropertyOfOrderByPropertyId($id));
	}


	/**
	 * @param int $id The ID of the property to be deleted.
	 */
	public function deletePropertyOfOrderByPropertyId(int $id): Response
	{
		return $this->connector->send(new DeletePropertyOfOrderByPropertyId($id));
	}


	/**
	 * @param array $columns The desired columns/attributes of the order referrer to be loaded.
	 */
	public function listReferrers(?array $columns = null): Response
	{
		return $this->connector->send(new ListReferrers($columns));
	}


	public function getNextFreeMainReferrerId(): Response
	{
		return $this->connector->send(new GetNextFreeMainReferrerId());
	}


	/**
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of orders to be displayed per page. The default number of referrers per page is 20.
	 * @param string $sortBy Sort search result according to specified field. The default value is id.
	 * @param string $sortOrder Sort direction desc or asc. The default value is asc.
	 * @param int $id The ID of the referrer.
	 * @param int $name The name of the referrer.
	 */
	public function searchForReferrers(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?int $id = null,
		?int $name = null,
	): Response
	{
		return $this->connector->send(new SearchForReferrers($page, $itemsPerPage, $sortBy, $sortOrder, $id, $name));
	}


	/**
	 * @param int $parentReferrerId
	 * @param array $data The attributes of the order referrer to be created.
	 */
	public function createOrderReferrer(int $parentReferrerId, array $data): Response
	{
		return $this->connector->send(new CreateOrderReferrer($parentReferrerId, $data));
	}


	/**
	 * @param int $referrerId The ID of the referrer.
	 */
	public function getReferrer(int $referrerId): Response
	{
		return $this->connector->send(new GetReferrer($referrerId));
	}


	/**
	 * @param int $referrerId The ID of the referrer.
	 */
	public function updateReferrer(int $referrerId): Response
	{
		return $this->connector->send(new UpdateReferrer($referrerId));
	}


	/**
	 * @param int $referrerId The ID of the referrer.
	 */
	public function deleteReferrer(int $referrerId): Response
	{
		return $this->connector->send(new DeleteReferrer($referrerId));
	}


	/**
	 * @param int $orderId This filter restricts the search results to orders with a specific ID.
	 * @param int $plentyId This filter restricts the search results to orders with a specific plenty ID.
	 * @param string $orderTypeId This filter restricts the search results to orders with a specific order type ID.
	 * @param float|int $statusId This filter restricts the search results to orders with a specific status ID.
	 * @param float|int $referrerId This filter restricts the search results to orders with a specific referrer ID.
	 * @param int $ownerId This filter restricts the search results to orders with a specific owner ID.
	 * @param int $locationId This filter restricts the search results to orders with a specific location ID.
	 * @param string $updatedAt This filter restricts the search results to orders with a specific update date.
	 * @param string $createdAt This filter restricts the search results to orders with a specific creation date.
	 * @param string $lockStatus This filter restricts the search results to orders with a specific lock status.
	 * @param string $orderAddressData This filter restricts the search results to orders with specific address data.
	 * @param string $contactData This filter restricts the search results to orders with specific contact data.
	 * @param int $orderItemTypeId This filter restricts the search results to orders with a specific order item type ID.
	 * @param int $itemId This filter restricts the search results to orders including a specific item.
	 * @param int $itemVariationId This filter restricts the search results to orders including a specific item variation.
	 * @param string $variationNumber This filter restricts the search results to orders including a specific variation number.
	 * @param string $orderItemName This filter restricts the search results to orders including a specific order item name.
	 * @param string $documentNumber This filter restricts the search results to orders with a specific document number.
	 * @param bool $hasValidInvoice This filter restricts the search results to orders for which a valid invoice exists.
	 * @param string $packageNumber This filter restricts the search results to orders with a specific package number.
	 * @param int $contactClassId This filter restricts the search results to orders with a specific contact class ID.
	 * @param int $itemManufacturerId This filter restricts the search results to orders with a specific item manufacturer ID.
	 * @param int $orderItemWarehouseId This filter restricts the search results to orders with a specific order item warehouse ID.
	 * @param float|int $invoiceTotalSystemCurrency This filter restricts the search results to orders with a specific invoice total (in system currency).
	 * @param bool $isDeliveryAddressPackingStation This filter restricts the search results to orders for which the delivery address is a packing station.
	 * @param string $serialNumber This filter restricts the search results to orders with a specific serial number.
	 * @param bool $isGuestContact This filter restricts the search results to orders with a guest contact.
	 * @param int $variationSupplierId This filter restricts the search results to orders with a specific variation supplier ID.
	 * @param int $orderItemReferrerId This filter restricts the search results to orders with a specific order item referrer ID.
	 * @param int $tag This filter restricts the search results to orders with a specific tag.
	 * @param bool $excludeMainOrders This filter restricts the search results to orders for which no delivery orders exist.
	 * @param string $orderPropertyTypeId This filter restricts the search results to orders with an order property with a specific value. The order property type ID has to be replaced in the filter name.
	 * @param string $orderDateTypeId This filter restricts the search results to orders with an order date with a specific value. The order date type ID has to be replaced in the filter name.
	 * @param int $orderReferenceReferenceType This filter restricts the search results to orders with an order reference with a specific value. The order reference type has to be replaced in the filter name.
	 * @param int $orderItemReferenceReferenceType This filter restricts the search results to orders with an order item reference with a specific value. The order item reference type has to be replaced in the filter name.
	 * @param int $relationReferenceReferenceTypeRelationType This filter restricts the search results to orders with a relation reference with a specific value. The reference type and relation type has to be replaced in the filter name.
	 * @param string $soldCouponCode This filter restricts the search results to orders with a specific sold coupon code.
	 * @param string $redeemedCouponCode This filter restricts the search results to orders with a specific redeemed coupon code.
	 * @param int $orderBillingAddressCountryId This filter restricts the search results to orders with a specific invoice address country ID.
	 * @param int $orderDeliveryAddressCountryId This filter restricts the search results to orders with a specific delivery address country ID.
	 * @param string $documentNumberDocumentType This filter restricts the search results to orders with a document number with a specific value. The document type has to be replaced in the filter name.
	 * @param string $orderItemPropertyTypeId This filter restricts the search results to orders with an order item property with a specific value. The order property type ID has to be replaced in the filter name.
	 * @param int $addressRelationTypeId This filter restricts the search results to orders with an address relation with a specific value. The address relation type ID has to be replaced in the filter name.
	 * @param int $shippingServiceProviderId This filter restricts the search results to orders with a specific shipping service provider ID.
	 * @param string $shippingServiceProviderType This filter restricts the search results to orders with a specific shipping service provider type.
	 * @param string $shippingStatus This filter restricts the search results to orders with a specific shipping status.
	 * @param string $shippingShipmentDate This filter restricts the search results to orders with a specific shipment date.
	 * @param string $sortBy This field is used for sorting. Default is 'orderId'. Possible values are 'orderId', 'statusId', 'orderDeliveryAddressPostCode', 'invoiceNumber', 'orderDate_{2,3,5,8}', 'orderProperty_33'
	 * @param string $sortOrder The order to sort by. Possible values are 'asc' and 'desc'.
	 * @param int $page The page to get. The returned default page is page 1.
	 * @param int $itemsPerPage The number of orders to be displayed per page. The default number of orders displayed per page is 50.
	 * @param array $with Load additional relations for an order.
	 * @param bool $lazyLoaded If true, no default relations are loaded. Default = true.
	 */
	public function searchOrders(
		?int $orderId = null,
		?int $plentyId = null,
		?string $orderTypeId = null,
		float|int|null $statusId = null,
		float|int|null $referrerId = null,
		?int $ownerId = null,
		?int $locationId = null,
		?string $updatedAt = null,
		?string $createdAt = null,
		?string $lockStatus = null,
		?string $orderAddressData = null,
		?string $contactData = null,
		?int $orderItemTypeId = null,
		?int $itemId = null,
		?int $itemVariationId = null,
		?string $variationNumber = null,
		?string $orderItemName = null,
		?string $documentNumber = null,
		?bool $hasValidInvoice = null,
		?string $packageNumber = null,
		?int $contactClassId = null,
		?int $itemManufacturerId = null,
		?int $orderItemWarehouseId = null,
		float|int|null $invoiceTotalSystemCurrency = null,
		?bool $isDeliveryAddressPackingStation = null,
		?string $serialNumber = null,
		?bool $isGuestContact = null,
		?int $variationSupplierId = null,
		?int $orderItemReferrerId = null,
		?int $tag = null,
		?bool $excludeMainOrders = null,
		?string $orderPropertyTypeId = null,
		?string $orderDateTypeId = null,
		?int $orderReferenceReferenceType = null,
		?int $orderItemReferenceReferenceType = null,
		?int $relationReferenceReferenceTypeRelationType = null,
		?string $soldCouponCode = null,
		?string $redeemedCouponCode = null,
		?int $orderBillingAddressCountryId = null,
		?int $orderDeliveryAddressCountryId = null,
		?string $documentNumberDocumentType = null,
		?string $orderItemPropertyTypeId = null,
		?int $addressRelationTypeId = null,
		?int $shippingServiceProviderId = null,
		?string $shippingServiceProviderType = null,
		?string $shippingStatus = null,
		?string $shippingShipmentDate = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $with = null,
		?bool $lazyLoaded = null,
	): Response
	{
		return $this->connector->send(new SearchOrders($orderId, $plentyId, $orderTypeId, $statusId, $referrerId, $ownerId, $locationId, $updatedAt, $createdAt, $lockStatus, $orderAddressData, $contactData, $orderItemTypeId, $itemId, $itemVariationId, $variationNumber, $orderItemName, $documentNumber, $hasValidInvoice, $packageNumber, $contactClassId, $itemManufacturerId, $orderItemWarehouseId, $invoiceTotalSystemCurrency, $isDeliveryAddressPackingStation, $serialNumber, $isGuestContact, $variationSupplierId, $orderItemReferrerId, $tag, $excludeMainOrders, $orderPropertyTypeId, $orderDateTypeId, $orderReferenceReferenceType, $orderItemReferenceReferenceType, $relationReferenceReferenceTypeRelationType, $soldCouponCode, $redeemedCouponCode, $orderBillingAddressCountryId, $orderDeliveryAddressCountryId, $documentNumberDocumentType, $orderItemPropertyTypeId, $addressRelationTypeId, $shippingServiceProviderId, $shippingServiceProviderType, $shippingStatus, $shippingShipmentDate, $sortBy, $sortOrder, $page, $itemsPerPage, $with, $lazyLoaded));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId This filter restricts the search results to orders with a specific ID.
	 * @param int $plentyId This filter restricts the search results to orders with a specific plenty ID.
	 * @param string $orderTypeId This filter restricts the search results to orders with a specific order type ID.
	 * @param float|int $statusId This filter restricts the search results to orders with a specific status ID.
	 * @param float|int $referrerId This filter restricts the search results to orders with a specific referrer ID.
	 * @param int $ownerId This filter restricts the search results to orders with a specific owner ID.
	 * @param int $locationId This filter restricts the search results to orders with a specific location ID.
	 * @param string $updatedAt This filter restricts the search results to orders with a specific update date.
	 * @param string $createdAt This filter restricts the search results to orders with a specific creation date.
	 * @param string $lockStatus This filter restricts the search results to orders with a specific lock status.
	 * @param string $orderAddressData This filter restricts the search results to orders with specific address data.
	 * @param string $contactData This filter restricts the search results to orders with specific contact data.
	 * @param int $orderItemTypeId This filter restricts the search results to orders with a specific order item type ID.
	 * @param int $itemId This filter restricts the search results to orders including a specific item.
	 * @param int $itemVariationId This filter restricts the search results to orders including a specific item variation.
	 * @param string $variationNumber This filter restricts the search results to orders including a specific variation number.
	 * @param string $orderItemName This filter restricts the search results to orders including a specific order item name.
	 * @param string $documentNumber This filter restricts the search results to orders with a specific document number.
	 * @param bool $hasValidInvoice This filter restricts the search results to orders for which a valid invoice exists.
	 * @param string $packageNumber This filter restricts the search results to orders with a specific package number.
	 * @param int $contactClassId This filter restricts the search results to orders with a specific contact class ID.
	 * @param int $itemManufacturerId This filter restricts the search results to orders with a specific item manufacturer ID.
	 * @param int $orderItemWarehouseId This filter restricts the search results to orders with a specific order item warehouse ID.
	 * @param float|int $invoiceTotalSystemCurrency This filter restricts the search results to orders with a specific invoice total (in system currency).
	 * @param bool $isDeliveryAddressPackingStation This filter restricts the search results to orders for which the delivery address is a packing station.
	 * @param string $serialNumber This filter restricts the search results to orders with a specific serial number.
	 * @param bool $isGuestContact This filter restricts the search results to orders with a guest contact.
	 * @param int $variationSupplierId This filter restricts the search results to orders with a specific variation supplier ID.
	 * @param int $orderItemReferrerId This filter restricts the search results to orders with a specific order item referrer ID.
	 * @param int $tag This filter restricts the search results to orders with a specific tag.
	 * @param bool $excludeMainOrders This filter restricts the search results to orders for which no delivery orders exist.
	 * @param string $orderPropertyTypeId This filter restricts the search results to orders with an order property with a specific value. The order property type ID has to be replaced in the filter name.
	 * @param string $orderDateTypeId This filter restricts the search results to orders with an order date with a specific value. The order date type ID has to be replaced in the filter name.
	 * @param int $orderReferenceReferenceType This filter restricts the search results to orders with an order reference with a specific value. The order reference type has to be replaced in the filter name.
	 * @param int $orderItemReferenceReferenceType This filter restricts the search results to orders with an order item reference with a specific value. The order item reference type has to be replaced in the filter name.
	 * @param int $relationReferenceReferenceTypeRelationType This filter restricts the search results to orders with a relation reference with a specific value. The reference type and relation type has to be replaced in the filter name.
	 * @param string $soldCouponCode This filter restricts the search results to orders with a specific sold coupon code.
	 * @param string $redeemedCouponCode This filter restricts the search results to orders with a specific redeemed coupon code.
	 * @param int $orderBillingAddressCountryId This filter restricts the search results to orders with a specific invoice address country ID.
	 * @param int $orderDeliveryAddressCountryId This filter restricts the search results to orders with a specific delivery address country ID.
	 * @param string $documentNumberDocumentType This filter restricts the search results to orders with a document number with a specific value. The document type has to be replaced in the filter name.
	 * @param string $orderItemPropertyTypeId This filter restricts the search results to orders with an order item property with a specific value. The order property type ID has to be replaced in the filter name.
	 * @param int $addressRelationTypeId This filter restricts the search results to orders with an address relation with a specific value. The address relation type ID has to be replaced in the filter name.
	 * @param int $shippingServiceProviderId This filter restricts the search results to orders with a specific shipping service provider ID.
	 * @param string $shippingServiceProviderType This filter restricts the search results to orders with a specific shipping service provider type.
	 * @param string $shippingStatus This filter restricts the search results to orders with a specific shipping status.
	 * @param string $shippingShipmentDate This filter restricts the search results to orders with a specific shipment date.
	 * @param string $sortBy This field is used for sorting. Default is 'orderId'. Possible values are 'orderId', 'statusId', 'orderDeliveryAddressPostCode', 'invoiceNumber', 'orderDate_{2,3,5,8}', 'orderProperty_33'
	 * @param string $sortOrder The order to sort by. Possible values are 'asc' and 'desc'.
	 * @param int $page The page to get. The returned default page is page 1.
	 * @param int $itemsPerPage The number of orders to be displayed per page. The default number of orders displayed per page is 50.
	 * @param array $with Load additional relations for an order.
	 * @param bool $lazyLoaded If true, no default relations are loaded. Default = true.
	 */
	public function searchOrdersDuplicate11(
		?int $orderId = null,
		?int $plentyId = null,
		?string $orderTypeId = null,
		float|int|null $statusId = null,
		float|int|null $referrerId = null,
		?int $ownerId = null,
		?int $locationId = null,
		?string $updatedAt = null,
		?string $createdAt = null,
		?string $lockStatus = null,
		?string $orderAddressData = null,
		?string $contactData = null,
		?int $orderItemTypeId = null,
		?int $itemId = null,
		?int $itemVariationId = null,
		?string $variationNumber = null,
		?string $orderItemName = null,
		?string $documentNumber = null,
		?bool $hasValidInvoice = null,
		?string $packageNumber = null,
		?int $contactClassId = null,
		?int $itemManufacturerId = null,
		?int $orderItemWarehouseId = null,
		float|int|null $invoiceTotalSystemCurrency = null,
		?bool $isDeliveryAddressPackingStation = null,
		?string $serialNumber = null,
		?bool $isGuestContact = null,
		?int $variationSupplierId = null,
		?int $orderItemReferrerId = null,
		?int $tag = null,
		?bool $excludeMainOrders = null,
		?string $orderPropertyTypeId = null,
		?string $orderDateTypeId = null,
		?int $orderReferenceReferenceType = null,
		?int $orderItemReferenceReferenceType = null,
		?int $relationReferenceReferenceTypeRelationType = null,
		?string $soldCouponCode = null,
		?string $redeemedCouponCode = null,
		?int $orderBillingAddressCountryId = null,
		?int $orderDeliveryAddressCountryId = null,
		?string $documentNumberDocumentType = null,
		?string $orderItemPropertyTypeId = null,
		?int $addressRelationTypeId = null,
		?int $shippingServiceProviderId = null,
		?string $shippingServiceProviderType = null,
		?string $shippingStatus = null,
		?string $shippingShipmentDate = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $with = null,
		?bool $lazyLoaded = null,
	): Response
	{
		return $this->connector->send(new SearchOrders($orderId, $plentyId, $orderTypeId, $statusId, $referrerId, $ownerId, $locationId, $updatedAt, $createdAt, $lockStatus, $orderAddressData, $contactData, $orderItemTypeId, $itemId, $itemVariationId, $variationNumber, $orderItemName, $documentNumber, $hasValidInvoice, $packageNumber, $contactClassId, $itemManufacturerId, $orderItemWarehouseId, $invoiceTotalSystemCurrency, $isDeliveryAddressPackingStation, $serialNumber, $isGuestContact, $variationSupplierId, $orderItemReferrerId, $tag, $excludeMainOrders, $orderPropertyTypeId, $orderDateTypeId, $orderReferenceReferenceType, $orderItemReferenceReferenceType, $relationReferenceReferenceTypeRelationType, $soldCouponCode, $redeemedCouponCode, $orderBillingAddressCountryId, $orderDeliveryAddressCountryId, $documentNumberDocumentType, $orderItemPropertyTypeId, $addressRelationTypeId, $shippingServiceProviderId, $shippingServiceProviderType, $shippingStatus, $shippingShipmentDate, $sortBy, $sortOrder, $page, $itemsPerPage, $with, $lazyLoaded));
	}


	/**
	 * @param bool $includePlugins The flag that indicates if the plugin providers should be also returned in the list
	 */
	public function getTheListOfActiveShippingServiceProvidersForRegistration(?bool $includePlugins = null): Response
	{
		return $this->connector->send(new GetTheListOfActiveShippingServiceProvidersForRegistration($includePlugins));
	}


	/**
	 * @param int $active Returns only the active shipping countries.
	 * @param array $with The relations to be loaded. Possible values are 'states' and 'names'.
	 * @param int $onlyEucountries Returns only the EU shipping countries.
	 */
	public function listShippingCountries(
		?int $active = null,
		?array $with = null,
		?int $onlyEucountries = null,
	): Response
	{
		return $this->connector->send(new ListShippingCountries($active, $with, $onlyEucountries));
	}


	public function returnPaginatedListContainingOrdersWithShippingInformation(): Response
	{
		return $this->connector->send(new ReturnPaginatedListContainingOrdersWithShippingInformation());
	}


	public function listShippingPackageTypes(): Response
	{
		return $this->connector->send(new ListShippingPackageTypes());
	}


	/**
	 * @param int $shippingPackageTypeId The ID of the shipping package type
	 */
	public function getShippingPackageType(int $shippingPackageTypeId): Response
	{
		return $this->connector->send(new GetShippingPackageType($shippingPackageTypeId));
	}


	/**
	 * @param int $id The ID of the order package item variation
	 */
	public function updatePackageVariationOrQuantityForOrder(int $id): Response
	{
		return $this->connector->send(new UpdatePackageVariationOrQuantityForOrder($id));
	}


	/**
	 * @param int $id The ID of the order package item variation
	 */
	public function deletePackageVariationOrQuantityForOrder(int $id): Response
	{
		return $this->connector->send(new DeletePackageVariationOrQuantityForOrder($id));
	}


	/**
	 * @param int $packageId The ID of the package
	 * @param int $itemId The ID of the item
	 * @param int $variationId The ID of the variation
	 */
	public function updateItemsOfOrderPackage(int $packageId, int $itemId, int $variationId): Response
	{
		return $this->connector->send(new UpdateItemsOfOrderPackage($packageId, $itemId, $variationId));
	}


	/**
	 * @param int $packageId The ID of the package
	 * @param int $itemId The ID of the item
	 * @param int $variationId The ID of the variation
	 */
	public function deleteItemsOfOrderPackage(int $packageId, int $itemId, int $variationId): Response
	{
		return $this->connector->send(new DeleteItemsOfOrderPackage($packageId, $itemId, $variationId));
	}


	/**
	 * @param int $orderShippingPackageId The ID of the order shipping package
	 */
	public function updateOrderShippingPackageByThePackageId(int $orderShippingPackageId): Response
	{
		return $this->connector->send(new UpdateOrderShippingPackageByThePackageId($orderShippingPackageId));
	}


	/**
	 * @param int $packageId The ID of the order package
	 */
	public function listItemsOfOrderPackage(int $packageId): Response
	{
		return $this->connector->send(new ListItemsOfOrderPackage($packageId));
	}


	/**
	 * @param int $packageId The ID of the order package
	 */
	public function createPackageVariationOrQuantityForOrder(int $packageId): Response
	{
		return $this->connector->send(new CreatePackageVariationOrQuantityForOrder($packageId));
	}


	/**
	 * @param int $packageId The ID of the package
	 */
	public function getPackedItemsInPackage(int $packageId): Response
	{
		return $this->connector->send(new GetPackedItemsInPackage($packageId));
	}


	/**
	 * @param string $orderId The ID of the order
	 */
	public function listOrderShippingPallets(string $orderId): Response
	{
		return $this->connector->send(new ListOrderShippingPallets($orderId));
	}


	public function createOrderShippingPallets(): Response
	{
		return $this->connector->send(new CreateOrderShippingPallets());
	}


	/**
	 * @param int $palletId The ID of the pallet
	 */
	public function listAllPalletsOfOrder(int $palletId): Response
	{
		return $this->connector->send(new ListAllPalletsOfOrder($palletId));
	}


	/**
	 * @param int $palletId The ID of the pallet
	 */
	public function updateAllPalletsOfOrder(int $palletId): Response
	{
		return $this->connector->send(new UpdateAllPalletsOfOrder($palletId));
	}


	/**
	 * @param int $palletId The ID of the pallet
	 */
	public function deleteAllPalletsOfOrder(int $palletId): Response
	{
		return $this->connector->send(new DeleteAllPalletsOfOrder($palletId));
	}


	/**
	 * @param int $palletId The ID of the pallet.
	 * @param array $with Possible value is 'items'.
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of packages to list per page.
	 * @param string $sortBy The column to be sorted by
	 * @param string $sortOrder The sort direction
	 */
	public function getAllThePackagesForTheGivenPalletId(
		int $palletId,
		?array $with = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
	): Response
	{
		return $this->connector->send(new GetAllThePackagesForTheGivenPalletId($palletId, $with, $page, $itemsPerPage, $sortBy, $sortOrder));
	}


	/**
	 * @param int $parcelServiceRegionId The ID of the parcel service region
	 * @param array $columns The properties to be loaded
	 */
	public function getOrderParcelServiceRegion(int $parcelServiceRegionId, ?array $columns = null): Response
	{
		return $this->connector->send(new GetOrderParcelServiceRegion($parcelServiceRegionId, $columns));
	}


	/**
	 * @param string $language Language for parcel preset name
	 */
	public function getPreviewList(string $language): Response
	{
		return $this->connector->send(new GetPreviewList($language));
	}


	/**
	 * @param array $columns The attributes to be loaded in the shipping profile
	 * @param string $parcelServiceName Filter that restricts the search result to parcel service presets with a specified backend name (e.g. 'DHL' for DHL)
	 * @param string $shippingServiceProvider Filter that restricts the search result to a shipping service provider
	 * @param string $name Filter that restricts the search result to parcel service presets with a specified backend name
	 * @param string $shippingGroup Filter that restricts the search result to parcel service preset with specific shipping_group name
	 * @param string $with The name of an relation to the preset. The following parameter is available: parcelServiceRegion, parcelServiceRegionConstraint, parcelServicePresetNames and parcelServiceNames.
	 * @param string $updatedAtBefore Filter that restricts the search result to presets that were updated before a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
	 * @param string $updatedAtAfter Filter that restricts the search result to presets that were updated after a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
	 */
	public function listShippingProfiles(
		?array $columns = null,
		?string $parcelServiceName = null,
		?string $shippingServiceProvider = null,
		?string $name = null,
		?string $shippingGroup = null,
		?string $with = null,
		?string $updatedAtBefore = null,
		?string $updatedAtAfter = null,
	): Response
	{
		return $this->connector->send(new ListShippingProfiles($columns, $parcelServiceName, $shippingServiceProvider, $name, $shippingGroup, $with, $updatedAtBefore, $updatedAtAfter));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $language Language for parcel preset name
	 */
	public function getPreviewListDuplicate12(string $language): Response
	{
		return $this->connector->send(new GetPreviewList($language));
	}


	/**
	 * @param int $presetId The ID of the shipping profile
	 * @param array $columns The attributes to be loaded in the shipping profile
	 */
	public function getShippingProfile(int $presetId, ?array $columns = null): Response
	{
		return $this->connector->send(new GetShippingProfile($presetId, $columns));
	}


	/**
	 * @param int $presetId  The ID of the preset
	 * @param array $columns The properties to be loaded
	 */
	public function listParcelServiceRegionsByParcelServicePresetId(int $presetId, ?array $columns = null): Response
	{
		return $this->connector->send(new ListParcelServiceRegionsByParcelServicePresetId($presetId, $columns));
	}


	/**
	 * @param int $id The ID of the returns service provider
	 * @param string $name The name of the returns service provider
	 * @param string $label The label of the returns service provider (if provided by plugin)
	 * @param int $pluginId The ID of the plugin
	 */
	public function listReturnsServiceProviders(int $id, string $name, string $label, int $pluginId): Response
	{
		return $this->connector->send(new ListReturnsServiceProviders($id, $name, $label, $pluginId));
	}


	public function listReturnsServiceProviderPlugins(): Response
	{
		return $this->connector->send(new ListReturnsServiceProviderPlugins());
	}


	/**
	 * @param int $providerId The ID of the returns service provider
	 */
	public function getReturnsServiceProviderByTheId(int $providerId): Response
	{
		return $this->connector->send(new GetReturnsServiceProviderByTheId($providerId));
	}


	public function listOrdersWithShippingInformation(): Response
	{
		return $this->connector->send(new ListOrdersWithShippingInformation());
	}


	public function createShippingInformation(): Response
	{
		return $this->connector->send(new CreateShippingInformation());
	}


	/**
	 * @param string $updatedAtBefore Filter that restricts the search result to shipping providers that were updated before a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
	 * @param string $updatedAtAfter Filter that restricts the search result to shipping providers that were updated after a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
	 * @param string $with The name of an relation to the shipping provider. The following parameter is available: ownShippingServiceProviders.
	 */
	public function listShippingServiceProviders(
		?string $updatedAtBefore = null,
		?string $updatedAtAfter = null,
		?string $with = null,
	): Response
	{
		return $this->connector->send(new ListShippingServiceProviders($updatedAtBefore, $updatedAtAfter, $with));
	}


	public function saveShippingServiceProvider(): Response
	{
		return $this->connector->send(new SaveShippingServiceProvider());
	}


	public function listShippingServiceProviderPlugins(): Response
	{
		return $this->connector->send(new ListShippingServiceProviderPlugins());
	}


	/**
	 * @param int $shippingServiceProviderId
	 * @param int $shippingServiceProviderId The ID of the shipping service provider
	 */
	public function getShippingServiceProvider(int $shippingServiceProviderId): Response
	{
		return $this->connector->send(new GetShippingServiceProvider($shippingServiceProviderId, $shippingServiceProviderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param float|int $statusId The ID of the status
	 * @param string $createdAtFrom Set a start date to get status history entries beginning with this date
	 * @param string $createdAtTo Set an end date to get status history entries up to this date
	 * @param string $userId The ID of the user
	 */
	public function listStatusHistoriesOfOrders(
		?int $orderId = null,
		float|int|null $statusId = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?string $userId = null,
	): Response
	{
		return $this->connector->send(new ListStatusHistoriesOfOrders($orderId, $statusId, $createdAtFrom, $createdAtTo, $userId));
	}


	/**
	 * @param float|int $statusIdFrom Define an ID as a start value for the filter. Filter that restricts the search for order statuses to IDs from a defined value.
	 * @param float|int $statusIdTo Define an ID as an end value for the filter.
	 * @param string $language Filter that restricts the search for order statuses to a defined language.
	 */
	public function searchesForOrderStatuses(
		float|int|null $statusIdFrom = null,
		float|int|null $statusIdTo = null,
		?string $language = null,
	): Response
	{
		return $this->connector->send(new SearchesForOrderStatuses($statusIdFrom, $statusIdTo, $language));
	}


	public function createsOrderStatus(): Response
	{
		return $this->connector->send(new CreatesOrderStatus());
	}


	public function getAllOrderStatuses(): Response
	{
		return $this->connector->send(new GetAllOrderStatuses());
	}


	/**
	 * @param array $newStatusValues Set an array of new order status properties consisting of one key and one value for each property. The status colour must be set as a hexadecimal code. All other properties must be specified either by value 0 (inactive) or 1 (active).
	 * @param array $selectedStatusList Set a list with the IDs of the order statuses that should be changed.
	 */
	public function changeOrderStatusProperties(array $newStatusValues, array $selectedStatusList): Response
	{
		return $this->connector->send(new ChangeOrderStatusProperties($newStatusValues, $selectedStatusList));
	}


	/**
	 * @param float|int $statusId The ID of the order status.
	 */
	public function getOrderStatus(float|int $statusId): Response
	{
		return $this->connector->send(new GetOrderStatus($statusId));
	}


	/**
	 * @param float|int $statusId The ID of the order status that should be updated.
	 */
	public function updateOrderStatus(float|int $statusId): Response
	{
		return $this->connector->send(new UpdateOrderStatus($statusId));
	}


	/**
	 * @param float|int $statusId The ID of the status, which shall be deleted.
	 */
	public function deleteOrderStatus(float|int $statusId): Response
	{
		return $this->connector->send(new DeleteOrderStatus($statusId));
	}


	/**
	 * @param int $orderId The ID of the order.
	 * @param array $with Load additional relations for an order. The following relations are available:
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
	 * @param bool $addOrderItems Add the order items to the result. Default = true.
	 */
	public function getOrder(int $orderId, ?array $with = null, ?bool $addOrderItems = null): Response
	{
		return $this->connector->send(new GetOrder($orderId, $with, $addOrderItems));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function updateOrder(int $orderId): Response
	{
		return $this->connector->send(new UpdateOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order to be deleted.
	 */
	public function deleteOrder(int $orderId): Response
	{
		return $this->connector->send(new DeleteOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createAdvanceOrderFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateAdvanceOrderFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function convertSalesOrderIntoAdvanceOrder(int $orderId): Response
	{
		return $this->connector->send(new ConvertSalesOrderIntoAdvanceOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order.
	 * @param string $deliveryNoteNumber If desired, set the delivery note number provided by the supplier.
	 */
	public function bookOrderIn(int $orderId, ?string $deliveryNoteNumber = null): Response
	{
		return $this->connector->send(new BookOrderIn($orderId, $deliveryNoteNumber));
	}


	/**
	 * @param int $orderId The ID of the order to be canceled.
	 */
	public function cancelOrder(int $orderId): Response
	{
		return $this->connector->send(new CancelOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function getContactWish(int $orderId): Response
	{
		return $this->connector->send(new GetContactWish($orderId));
	}


	/**
	 * @param int $orderId The ID of the order to redeem the coupon
	 * @param string $coupon The coupon code to be redeemed
	 */
	public function redeemCouponCode(int $orderId, string $coupon): Response
	{
		return $this->connector->send(new RedeemCouponCode($orderId, $coupon));
	}


	/**
	 * @param int $orderId
	 * @param int $coupon
	 */
	public function validateCouponForOrder(int $orderId, int $coupon): Response
	{
		return $this->connector->send(new ValidateCouponForOrder($orderId, $coupon));
	}


	/**
	 * @param int $orderId
	 */
	public function createCreditNoteFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateCreditNoteFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateOrderItemsForCreateCreditNoteFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new ValidateOrderItemsForCreateCreditNoteFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function updateTheOrderCurrency(int $orderId): Response
	{
		return $this->connector->send(new UpdateTheOrderCurrency($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function listAllDatesOfOrder(int $orderId): Response
	{
		return $this->connector->send(new ListAllDatesOfOrder($orderId));
	}


	/**
	 * @param int $typeId The ID of the order date type that should be found
	 * @param int $orderId The ID of the order
	 */
	public function getDate(int $typeId, int $orderId): Response
	{
		return $this->connector->send(new GetDate($typeId, $orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createDeliveryOrderFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateDeliveryOrderFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function createDeliveryOrdersAutomaticallyForAllOrderItems(int $orderId): Response
	{
		return $this->connector->send(new CreateDeliveryOrdersAutomaticallyForAllOrderItems($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateOrderItemsForCreateDeliveryOrderFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new ValidateOrderItemsForCreateDeliveryOrderFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getInformationAboutTheOrderFamily(int $orderId): Response
	{
		return $this->connector->send(new GetInformationAboutTheOrderFamily($orderId));
	}


	/**
	 * @param int $orderId
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of order items to be displayed per page. The default number of order items per page is 50. The maximum number is 250.
	 * @param string $sortBy Sort search result according to itemVariationId, orderItemName, createdAt, updatedAt or id. The default value is orderItemId.
	 * @param string $sortOrder Sort direction desc or asc. The default value is asc.
	 * @param array $with Load additional relations for an order item. Currently possible are:
	 *     <ul>
	 *     <li>'variation' = The variation that is associated with the order item.</li>
	 *     <li>'giftCardCodes' = The gift card codes that are associated with the order item.</li>
	 *     <li>'transactions' = The transactions that are associated with the order item.</li>
	 *     <li>'serialNumbers' = The serial numbers that are associated with the order item.</li>
	 *     <li>'variationBarcodes' = The barcodes that are associated with variation of the order item.</li>
	 *     </ul>
	 */
	public function searchOrderItems(
		int $orderId,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new SearchOrderItems($orderId, $page, $itemsPerPage, $sortBy, $sortOrder, $with));
	}


	/**
	 * @param int $orderId
	 */
	public function createUpdateReorderSforOrderItems(int $orderId): Response
	{
		return $this->connector->send(new CreateUpdateReorderSForOrderItems($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function listSerialNumbersOfOrder(int $orderId): Response
	{
		return $this->connector->send(new ListSerialNumbersOfOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function attachWarehouseLocations(int $orderId): Response
	{
		return $this->connector->send(new AttachWarehouseLocations($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function detachWarehouseLocations(int $orderId): Response
	{
		return $this->connector->send(new DetachWarehouseLocations($orderId));
	}


	/**
	 * @param int $orderId The ID of the order that the item belongs to.
	 * @param int $orderItemId The ID of the order item to be deleted.
	 */
	public function deleteOrderItem(int $orderId, int $orderItemId): Response
	{
		return $this->connector->send(new DeleteOrderItem($orderId, $orderItemId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $orderItemId The ID of the order item
	 */
	public function listSerialNumbersOfOrderItem(int $orderId, int $orderItemId): Response
	{
		return $this->connector->send(new ListSerialNumbersOfOrderItem($orderId, $orderItemId));
	}


	/**
	 * @param int $orderId
	 * @param int $orderItemId
	 */
	public function createItemSerialNumberAndBindItToOrderItem(int $orderId, int $orderItemId): Response
	{
		return $this->connector->send(new CreateItemSerialNumberAndBindItToOrderItem($orderId, $orderItemId));
	}


	/**
	 * @param int $orderId
	 */
	public function getMyAccountUrlOfTheOrder(int $orderId): Response
	{
		return $this->connector->send(new GetMyAccountUrlOfTheOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createOfferFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateOfferFromParentOrder($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId The ID of the order
	 * @param string $date The date that is saved as booking date for the outgoing stock.
	 */
	public function bookOutOrderItemsDuplicate13(int $orderId, ?string $date = null): Response
	{
		return $this->connector->send(new BookOutOrderItems($orderId, $date));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId The ID of the order
	 */
	public function revertOutgoingStockDuplicate14(int $orderId): Response
	{
		return $this->connector->send(new RevertOutgoingStock($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function listPackageNumbersOfOrder(int $orderId): Response
	{
		return $this->connector->send(new ListPackageNumbersOfOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createPropertyForOrder(int $orderId): Response
	{
		return $this->connector->send(new CreatePropertyForOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $typeId The property type ID
	 */
	public function listPropertiesOfOrder(int $orderId, int $typeId): Response
	{
		return $this->connector->send(new ListPropertiesOfOrder($orderId, $typeId));
	}


	/**
	 * @param int $orderId
	 * @param int $typeId
	 */
	public function updatePropertyOfOrderByOrderIdAndPropertyId(int $orderId, int $typeId): Response
	{
		return $this->connector->send(new UpdatePropertyOfOrderByOrderIdAndPropertyId($orderId, $typeId));
	}


	/**
	 * @param int $orderId
	 * @param int $typeId
	 */
	public function deletePropertyOfOrderByOrderIdAndPropertyTypeId(int $orderId, int $typeId): Response
	{
		return $this->connector->send(new DeletePropertyOfOrderByOrderIdAndPropertyTypeId($orderId, $typeId));
	}


	/**
	 * @param int $orderId
	 */
	public function createRedistributionFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateRedistributionFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createReorderFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateReorderFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createReorderSforOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateReorderSForOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateOrderItemsForCreateReorderFromSalesOrderDeliveryOrderRepairAndWarranty(
		int $orderId,
	): Response
	{
		return $this->connector->send(new ValidateOrderItemsForCreateReorderFromSalesOrderDeliveryOrderRepairAndWarranty($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createRepairOrderFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateRepairOrderFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateOrderItemsForCreateRepairFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new ValidateOrderItemsForCreateRepairFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createReturnFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateReturnFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateOrderItemsForCreateReturnFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new ValidateOrderItemsForCreateReturnFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createSalesOrderFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateSalesOrderFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function convertAdvanceOrderIntoSalesOrder(int $orderId): Response
	{
		return $this->connector->send(new ConvertAdvanceOrderIntoSalesOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateOrderItemsForCreateSalesOrderFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new ValidateOrderItemsForCreateSalesOrderFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function cancelShipment(int $orderId): Response
	{
		return $this->connector->send(new CancelShipment($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param array $columns The properties to be loaded
	 * @param string $with Possible values are 'labelBase64', 'items'
	 */
	public function listOrderShippingPackages(int $orderId, ?array $columns = null, ?string $with = null): Response
	{
		return $this->connector->send(new ListOrderShippingPackages($orderId, $columns, $with));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function createOrderShippingPackage(int $orderId): Response
	{
		return $this->connector->send(new CreateOrderShippingPackage($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function deleteAllOrderShippingPackagesForOrder(int $orderId): Response
	{
		return $this->connector->send(new DeleteAllOrderShippingPackagesForOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function listItemsContainedInPackagesOfOrder(int $orderId): Response
	{
		return $this->connector->send(new ListItemsContainedInPackagesOfOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function listPackedItemsOfShippingPackageByTheOrderId(int $orderId): Response
	{
		return $this->connector->send(new ListPackedItemsOfShippingPackageByTheOrderId($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function listUnpackedItemsOfShippingPackageByTheOrderId(int $orderId): Response
	{
		return $this->connector->send(new ListUnpackedItemsOfShippingPackageByTheOrderId($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function listUnpackedItemsFromOrder(int $orderId): Response
	{
		return $this->connector->send(new ListUnpackedItemsFromOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $orderShippingPackageId The ID of the order shipping package
	 * @param array $columns The properties to be loaded
	 */
	public function getOrderShippingPackage(int $orderId, int $orderShippingPackageId, ?array $columns = null): Response
	{
		return $this->connector->send(new GetOrderShippingPackage($orderId, $orderShippingPackageId, $columns));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $orderShippingPackageId The ID of the order shipping package
	 */
	public function updateOrderShippingPackage(int $orderId, int $orderShippingPackageId): Response
	{
		return $this->connector->send(new UpdateOrderShippingPackage($orderId, $orderShippingPackageId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $orderShippingPackageId The ID of the order shipping package
	 */
	public function deleteOrderShippingPackage(int $orderId, int $orderShippingPackageId): Response
	{
		return $this->connector->send(new DeleteOrderShippingPackage($orderId, $orderShippingPackageId));
	}


	/**
	 * @param int $orderId The ID of the order.
	 * @param array $with Possible value is 'items'.
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of packages to list per page.
	 * @param string $sortBy The column to be sorted by
	 * @param string $sortOrder The sort direction
	 */
	public function getAllThePackagesForTheGivenOrder(
		int $orderId,
		?array $with = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
	): Response
	{
		return $this->connector->send(new GetAllThePackagesForTheGivenOrder($orderId, $with, $page, $itemsPerPage, $sortBy, $sortOrder));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function listItemsContainedInPackagePalletsOfOrder(int $orderId): Response
	{
		return $this->connector->send(new ListItemsContainedInPackagePalletsOfOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $palletId The ID of the pallet
	 */
	public function listAllPackagesContainedInPalletsOfOrder(int $orderId, int $palletId): Response
	{
		return $this->connector->send(new ListAllPackagesContainedInPalletsOfOrder($orderId, $palletId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $palletId The ID of the pallet
	 */
	public function updateAllPackagesInPallet(int $orderId, int $palletId): Response
	{
		return $this->connector->send(new UpdateAllPackagesInPallet($orderId, $palletId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $palletId The ID of the pallet
	 */
	public function deleteAllOrderShippingPackagesInPallet(int $orderId, int $palletId): Response
	{
		return $this->connector->send(new DeleteAllOrderShippingPackagesInPallet($orderId, $palletId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $shippingProviderCode The code of the shipping service provider
	 */
	public function registerShipment(int $orderId, ?string $shippingProviderCode = null): Response
	{
		return $this->connector->send(new RegisterShipment($orderId, $shippingProviderCode));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function resetShipment(int $orderId): Response
	{
		return $this->connector->send(new ResetShipment($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function getShippingInformation(int $orderId): Response
	{
		return $this->connector->send(new GetShippingInformation($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function deleteShippingInformation(int $orderId): Response
	{
		return $this->connector->send(new DeleteShippingInformation($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function updateAdditionalDataOfTheShippingInformation(int $orderId): Response
	{
		return $this->connector->send(new UpdateAdditionalDataOfTheShippingInformation($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function getExportLabel(int $orderId): Response
	{
		return $this->connector->send(new GetExportLabel($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function updateTheShippingStatusOfTheShippingInformation(int $orderId): Response
	{
		return $this->connector->send(new UpdateTheShippingStatusOfTheShippingInformation($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function getTheStatusHistoryOfOrder(int $orderId): Response
	{
		return $this->connector->send(new GetTheStatusHistoryOfOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createSubscriptionFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateSubscriptionFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateOrderItemsForSubscriptionCreationFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new ValidateOrderItemsForSubscriptionCreationFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function createOrderItemTransactionsForOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateOrderItemTransactionsForOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createWarrantyFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new CreateWarrantyFromParentOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateOrderItemsForCreateWarrantyFromParentOrder(int $orderId): Response
	{
		return $this->connector->send(new ValidateOrderItemsForCreateWarrantyFromParentOrder($orderId));
	}


	public function createRedistribution(): Response
	{
		return $this->connector->send(new CreateRedistribution());
	}


	public function getRedistributionCreatePreview(): Response
	{
		return $this->connector->send(new GetRedistributionCreatePreview());
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function updateRedistribution(int $orderId): Response
	{
		return $this->connector->send(new UpdateRedistribution($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteRedistribution(int $orderId): Response
	{
		return $this->connector->send(new DeleteRedistribution($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId The ID of the order.
	 * @param string $deliveryNoteNumber If desired, set the delivery note number provided by the supplier.
	 */
	public function bookOrderInDuplicate15(int $orderId, ?string $deliveryNoteNumber = null): Response
	{
		return $this->connector->send(new BookOrderIn($orderId, $deliveryNoteNumber));
	}


	/**
	 * @param int $orderId
	 */
	public function getRedistributionUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetRedistributionUpdatePreview($orderId));
	}


	public function createReorder(): Response
	{
		return $this->connector->send(new CreateReorder());
	}


	public function getReorderCreatePreview(): Response
	{
		return $this->connector->send(new GetReorderCreatePreview());
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function updateReorder(int $orderId): Response
	{
		return $this->connector->send(new UpdateReorder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteReorder(int $orderId): Response
	{
		return $this->connector->send(new DeleteReorder($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId The ID of the order.
	 * @param string $deliveryNoteNumber If desired, set the delivery note number provided by the supplier.
	 */
	public function bookOrderInDuplicate16(int $orderId, ?string $deliveryNoteNumber = null): Response
	{
		return $this->connector->send(new BookOrderIn($orderId, $deliveryNoteNumber));
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function updateTheCurrency(int $orderId): Response
	{
		return $this->connector->send(new UpdateTheCurrency($orderId));
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function getTheDeliveryDate(int $orderId): Response
	{
		return $this->connector->send(new GetTheDeliveryDate($orderId));
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function calculateAndSaveTheDeliveryDates(int $orderId): Response
	{
		return $this->connector->send(new CalculateAndSaveTheDeliveryDates($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getReorderUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetReorderUpdatePreview($orderId));
	}


	public function createRepair(): Response
	{
		return $this->connector->send(new CreateRepair());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeUnassignedVariationToVariationDuplicate17(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeUnassignedVariationToVariation($orderItemId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeVariationToUnassignedVariationDuplicate18(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeVariationToUnassignedVariation($orderItemId));
	}


	public function getRepairOrderCreatePreview(): Response
	{
		return $this->connector->send(new GetRepairOrderCreatePreview());
	}


	public function getAllOrderRepairReasons(): Response
	{
		return $this->connector->send(new GetAllOrderRepairReasons());
	}


	public function setOrderRepairReason(): Response
	{
		return $this->connector->send(new SetOrderRepairReason());
	}


	/**
	 * @param int $repairReasonId
	 */
	public function getOrderRepairReason(int $repairReasonId): Response
	{
		return $this->connector->send(new GetOrderRepairReason($repairReasonId));
	}


	/**
	 * @param int $repairReasonId
	 */
	public function deleteOrderRepairReason(int $repairReasonId): Response
	{
		return $this->connector->send(new DeleteOrderRepairReason($repairReasonId));
	}


	public function getAllOrderRepairStatus(): Response
	{
		return $this->connector->send(new GetAllOrderRepairStatus());
	}


	public function setOrderRepairStatus(): Response
	{
		return $this->connector->send(new SetOrderRepairStatus());
	}


	/**
	 * @param int $repairStatusId
	 */
	public function getOrderRepairStatus(int $repairStatusId): Response
	{
		return $this->connector->send(new GetOrderRepairStatus($repairStatusId));
	}


	/**
	 * @param int $repairStatusId
	 */
	public function deleteOrderRepairStatus(int $repairStatusId): Response
	{
		return $this->connector->send(new DeleteOrderRepairStatus($repairStatusId));
	}


	/**
	 * @param int $orderId
	 */
	public function updateRepair(int $orderId): Response
	{
		return $this->connector->send(new UpdateRepair($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteRepair(int $orderId): Response
	{
		return $this->connector->send(new DeleteRepair($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function bookOutOrderItemsDuplicate19(int $orderId): Response
	{
		return $this->connector->send(new BookOutOrderItems($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function revertOutgoingStockDuplicate20(int $orderId): Response
	{
		return $this->connector->send(new RevertOutgoingStock($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function validateCancellationOfTheBookingOfOrderDuplicate21(int $orderId): Response
	{
		return $this->connector->send(new ValidateCancellationOfTheBookingOfOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getRepairOrderUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetRepairOrderUpdatePreview($orderId));
	}


	public function createReturn(): Response
	{
		return $this->connector->send(new CreateReturn());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeUnassignedVariationToVariationDuplicate22(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeUnassignedVariationToVariation($orderItemId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeVariationToUnassignedVariationDuplicate23(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeVariationToUnassignedVariation($orderItemId));
	}


	public function getReturnCreatePreview(): Response
	{
		return $this->connector->send(new GetReturnCreatePreview());
	}


	public function getAllOrderReturnReasons(): Response
	{
		return $this->connector->send(new GetAllOrderReturnReasons());
	}


	public function setOrderReturnReason(): Response
	{
		return $this->connector->send(new SetOrderReturnReason());
	}


	/**
	 * @param int $returnReasonsId
	 */
	public function getOrderReturnReason(int $returnReasonsId): Response
	{
		return $this->connector->send(new GetOrderReturnReason($returnReasonsId));
	}


	/**
	 * @param int $returnReasonsId
	 */
	public function deleteOrderReturnReason(int $returnReasonsId): Response
	{
		return $this->connector->send(new DeleteOrderReturnReason($returnReasonsId));
	}


	public function getAllOrderReturnStatus(): Response
	{
		return $this->connector->send(new GetAllOrderReturnStatus());
	}


	public function setOrderReturnStatus(): Response
	{
		return $this->connector->send(new SetOrderReturnStatus());
	}


	/**
	 * @param int $returnStatusId
	 */
	public function getOrderReturnStatus(int $returnStatusId): Response
	{
		return $this->connector->send(new GetOrderReturnStatus($returnStatusId));
	}


	/**
	 * @param int $returnStatusId
	 */
	public function deleteOrderReturnStatus(int $returnStatusId): Response
	{
		return $this->connector->send(new DeleteOrderReturnStatus($returnStatusId));
	}


	/**
	 * @param int $orderId
	 */
	public function updateReturn(int $orderId): Response
	{
		return $this->connector->send(new UpdateReturn($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteReturn(int $orderId): Response
	{
		return $this->connector->send(new DeleteReturn($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function bookOrderItemsOfReturn(int $orderId): Response
	{
		return $this->connector->send(new BookOrderItemsOfReturn($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function validateBookingOfReturn(int $orderId): Response
	{
		return $this->connector->send(new ValidateBookingOfReturn($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getReturnUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetReturnUpdatePreview($orderId));
	}


	public function createSalesOrder(): Response
	{
		return $this->connector->send(new CreateSalesOrder());
	}


	public function groupMultipleOrdersInOneOrder(): Response
	{
		return $this->connector->send(new GroupMultipleOrdersInOneOrder());
	}


	public function getSalesOrderCreateIncompletePreview(): Response
	{
		return $this->connector->send(new GetSalesOrderCreateIncompletePreview());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeUnassignedVariationToVariationDuplicate24(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeUnassignedVariationToVariation($orderItemId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeVariationToUnassignedVariationDuplicate25(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeVariationToUnassignedVariation($orderItemId));
	}


	public function getSalesOrderCreatePreview(): Response
	{
		return $this->connector->send(new GetSalesOrderCreatePreview());
	}


	/**
	 * @param int $orderId
	 */
	public function updateSalesOrder(int $orderId): Response
	{
		return $this->connector->send(new UpdateSalesOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteSalesOrder(int $orderId): Response
	{
		return $this->connector->send(new DeleteSalesOrder($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function bookOutOrderItemsDuplicate26(int $orderId): Response
	{
		return $this->connector->send(new BookOutOrderItems($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function revertOutgoingStockDuplicate27(int $orderId): Response
	{
		return $this->connector->send(new RevertOutgoingStock($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function validateCancellationOfTheBookingOfOrderDuplicate28(int $orderId): Response
	{
		return $this->connector->send(new ValidateCancellationOfTheBookingOfOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getSalesOrderUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetSalesOrderUpdatePreview($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function splitSalesOrderIntoAtLeastTwoSalesOrders(int $orderId): Response
	{
		return $this->connector->send(new SplitSalesOrderIntoAtLeastTwoSalesOrders($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param array $orderIds The IDs of the orders that you want to reset the shipments for
	 */
	public function resetShipmentDuplicate29(array $orderIds): Response
	{
		return $this->connector->send(new ResetShipment($orderIds));
	}


	public function createSubscription(): Response
	{
		return $this->connector->send(new CreateSubscription());
	}


	public function getSubscriptionCreatePreview(): Response
	{
		return $this->connector->send(new GetSubscriptionCreatePreview());
	}


	/**
	 * @param int $orderId
	 */
	public function updateSubscription(int $orderId): Response
	{
		return $this->connector->send(new UpdateSubscription($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteSubscription(int $orderId): Response
	{
		return $this->connector->send(new DeleteSubscription($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function updateTheCurrencyDuplicate30(int $orderId): Response
	{
		return $this->connector->send(new UpdateTheCurrency($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function createOrderForTodayForGivenSubscription(int $orderId): Response
	{
		return $this->connector->send(new CreateOrderForTodayForGivenSubscription($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getSubscriptionUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetSubscriptionUpdatePreview($orderId));
	}


	/**
	 * @param int $page The requested page of results
	 * @param int $itemsPerPage The number of results per page
	 * @param int $countryId The country ID of the taric vat assignments
	 * @param int $taricCode The taric code of the taric vat assignments
	 */
	public function listTaricVatAssignments(
		?int $page = null,
		?int $itemsPerPage = null,
		?int $countryId = null,
		?int $taricCode = null,
	): Response
	{
		return $this->connector->send(new ListTaricVatAssignments($page, $itemsPerPage, $countryId, $taricCode));
	}


	/**
	 * @param string $taricCode The taric code.
	 * @param int $countryId The country id.
	 */
	public function getTaricVatAssignment(string $taricCode, int $countryId): Response
	{
		return $this->connector->send(new GetTaricVatAssignment($taricCode, $countryId));
	}


	/**
	 * @param string $taricCode The taric code.
	 * @param int $countryId The country id.
	 */
	public function updateTaricVatAssignment(string $taricCode, int $countryId): Response
	{
		return $this->connector->send(new UpdateTaricVatAssignment($taricCode, $countryId));
	}


	/**
	 * @param string $taricCode The taric code.
	 * @param int $countryId The country id.
	 */
	public function createTaricVatAssignment(string $taricCode, int $countryId): Response
	{
		return $this->connector->send(new CreateTaricVatAssignment($taricCode, $countryId));
	}


	/**
	 * @param string $taricCode The taric code.
	 * @param int $countryId The country id.
	 */
	public function deleteTaricVatAssignment(string $taricCode, int $countryId): Response
	{
		return $this->connector->send(new DeleteTaricVatAssignment($taricCode, $countryId));
	}


	public function createWarranty(): Response
	{
		return $this->connector->send(new CreateWarranty());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeUnassignedVariationToVariationDuplicate31(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeUnassignedVariationToVariation($orderItemId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderItemId
	 */
	public function changeOrderItemOfTypeVariationToUnassignedVariationDuplicate32(int $orderItemId): Response
	{
		return $this->connector->send(new ChangeOrderItemOfTypeVariationToUnassignedVariation($orderItemId));
	}


	public function getWarrantyCreatePreview(): Response
	{
		return $this->connector->send(new GetWarrantyCreatePreview());
	}


	/**
	 * @param int $orderId
	 */
	public function updateWarranty(int $orderId): Response
	{
		return $this->connector->send(new UpdateWarranty($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function deleteWarranty(int $orderId): Response
	{
		return $this->connector->send(new DeleteWarranty($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function bookOutOrderItemsDuplicate33(int $orderId): Response
	{
		return $this->connector->send(new BookOutOrderItems($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function revertOutgoingStockDuplicate34(int $orderId): Response
	{
		return $this->connector->send(new RevertOutgoingStock($orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 */
	public function validateCancellationOfTheBookingOfOrderDuplicate35(int $orderId): Response
	{
		return $this->connector->send(new ValidateCancellationOfTheBookingOfOrder($orderId));
	}


	/**
	 * @param int $orderId
	 */
	public function getWarrantyUpdatePreview(int $orderId): Response
	{
		return $this->connector->send(new GetWarrantyUpdatePreview($orderId));
	}
}
