<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Payment\AssignPayments;
use PlentyOne\Api\Requests\Payment\CreateNameOfPropertyType;
use PlentyOne\Api\Requests\Payment\CreateOrderRelationWithValidation;
use PlentyOne\Api\Requests\Payment\CreatePayment;
use PlentyOne\Api\Requests\Payment\CreatePaymentContactRelation;
use PlentyOne\Api\Requests\Payment\CreatePaymentMethod;
use PlentyOne\Api\Requests\Payment\CreatePaymentOrderRelation;
use PlentyOne\Api\Requests\Payment\CreateProperty;
use PlentyOne\Api\Requests\Payment\CreatePropertyType;
use PlentyOne\Api\Requests\Payment\DeletePayents;
use PlentyOne\Api\Requests\Payment\DeletePayment;
use PlentyOne\Api\Requests\Payment\DeletePaymentContactRelation;
use PlentyOne\Api\Requests\Payment\DeletePaymentOrderRelation;
use PlentyOne\Api\Requests\Payment\DetachAllThePaymentFromAndOrder;
use PlentyOne\Api\Requests\Payment\GetActivePaymentMethods;
use PlentyOne\Api\Requests\Payment\GetDocumenBuilderActivePaymentMethods;
use PlentyOne\Api\Requests\Payment\GetNameOfPropertyType;
use PlentyOne\Api\Requests\Payment\GetPayment;
use PlentyOne\Api\Requests\Payment\GetPaymentMethod;
use PlentyOne\Api\Requests\Payment\GetPaymentMethods;
use PlentyOne\Api\Requests\Payment\GetPaymentMethodsAndIcons;
use PlentyOne\Api\Requests\Payment\GetPreviewListForPaymentMethod;
use PlentyOne\Api\Requests\Payment\GetProperty;
use PlentyOne\Api\Requests\Payment\GetPropertyType;
use PlentyOne\Api\Requests\Payment\GetSearchablePaymentMethods;
use PlentyOne\Api\Requests\Payment\GetSubscriptionsHandlingPaymentMethods;
use PlentyOne\Api\Requests\Payment\GetsPaymentMethodNameByIdAndLang;
use PlentyOne\Api\Requests\Payment\ListAllPaymentMethodNamesForPaymentMethodId;
use PlentyOne\Api\Requests\Payment\ListNamesOfPropertyTypes;
use PlentyOne\Api\Requests\Payment\ListPaymentMethods;
use PlentyOne\Api\Requests\Payment\ListPaymentMethodsNames;
use PlentyOne\Api\Requests\Payment\ListPayments;
use PlentyOne\Api\Requests\Payment\ListPaymentsByEntryDate;
use PlentyOne\Api\Requests\Payment\ListPaymentsByImportDate;
use PlentyOne\Api\Requests\Payment\ListPaymentsByPropertyTypeIdAndValue;
use PlentyOne\Api\Requests\Payment\ListPaymentsOfOrder;
use PlentyOne\Api\Requests\Payment\ListPaymentsOfPaymentMethod;
use PlentyOne\Api\Requests\Payment\ListPaymentsOfPaymentStatus;
use PlentyOne\Api\Requests\Payment\ListPaymentsOfTransactionType;
use PlentyOne\Api\Requests\Payment\ListProperties;
use PlentyOne\Api\Requests\Payment\ListPropertiesByCreationDate;
use PlentyOne\Api\Requests\Payment\ListPropertiesForPayment;
use PlentyOne\Api\Requests\Payment\ListPropertyTypes;
use PlentyOne\Api\Requests\Payment\SearchPayments;
use PlentyOne\Api\Requests\Payment\UpdateNameOfPropertyType;
use PlentyOne\Api\Requests\Payment\UpdatePayment;
use PlentyOne\Api\Requests\Payment\UpdatePaymentMethod;
use PlentyOne\Api\Requests\Payment\UpdateProperty;
use PlentyOne\Api\Requests\Payment\UpdatePropertyType;
use PlentyOne\Api\Requests\Payment\UpdatesPaymentMethods;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Payment extends BaseResource
{
	public function updateNameOfPropertyType(): Response
	{
		return $this->connector->send(new UpdateNameOfPropertyType());
	}


	public function createNameOfPropertyType(): Response
	{
		return $this->connector->send(new CreateNameOfPropertyType());
	}


	/**
	 * @param int $lang
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listNamesOfPropertyTypes(int $lang, ?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new ListNamesOfPropertyTypes($lang, $itemsPerPage, $page));
	}


	/**
	 * @param int $nameId
	 */
	public function getNameOfPropertyType(int $nameId): Response
	{
		return $this->connector->send(new GetNameOfPropertyType($nameId));
	}


	/**
	 * @param int $paymentId
	 */
	public function deletePaymentContactRelation(int $paymentId): Response
	{
		return $this->connector->send(new DeletePaymentContactRelation($paymentId));
	}


	/**
	 * @param int $paymentId
	 * @param int $contactId
	 */
	public function createPaymentContactRelation(int $paymentId, int $contactId): Response
	{
		return $this->connector->send(new CreatePaymentContactRelation($paymentId, $contactId));
	}


	/**
	 * @param int $paymentId
	 */
	public function deletePaymentOrderRelation(int $paymentId): Response
	{
		return $this->connector->send(new DeletePaymentOrderRelation($paymentId));
	}


	/**
	 * @param int $paymentId
	 * @param int $invoiceNumber
	 */
	public function createOrderRelationWithValidation(int $paymentId, int $invoiceNumber): Response
	{
		return $this->connector->send(new CreateOrderRelationWithValidation($paymentId, $invoiceNumber));
	}


	/**
	 * @param int $paymentId
	 * @param int $orderId
	 */
	public function createPaymentOrderRelation(int $paymentId, int $orderId): Response
	{
		return $this->connector->send(new CreatePaymentOrderRelation($paymentId, $orderId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $paymentId
	 * @param int $orderId
	 */
	public function createOrderRelationWithValidationDuplicate1(int $paymentId, int $orderId): Response
	{
		return $this->connector->send(new CreateOrderRelationWithValidation($paymentId, $orderId));
	}


	/**
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPayments(?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new ListPayments($itemsPerPage, $page));
	}


	public function updatePayment(): Response
	{
		return $this->connector->send(new UpdatePayment());
	}


	public function createPayment(): Response
	{
		return $this->connector->send(new CreatePayment());
	}


	/**
	 * @param array $ids An array with payment ids to be deleted. Eg: ['ids' => [1,2,3]]
	 */
	public function deletePayents(?array $ids = null): Response
	{
		return $this->connector->send(new DeletePayents($ids));
	}


	/**
	 * @param string $startDate The start date of the date range for the entry date of the payment
	 * @param string $endDate The end date of the date range for the entry date of the payment
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPaymentsByEntryDate(
		?string $startDate = null,
		?string $endDate = null,
		?int $itemsPerPage = null,
		?int $page = null,
	): Response
	{
		return $this->connector->send(new ListPaymentsByEntryDate($startDate, $endDate, $itemsPerPage, $page));
	}


	/**
	 * @param string $startDate The start date of the date range for the import date of the payment
	 * @param string $endDate The end date of the date range for the import date of the payment
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPaymentsByImportDate(
		?string $startDate = null,
		?string $endDate = null,
		?int $itemsPerPage = null,
		?int $page = null,
	): Response
	{
		return $this->connector->send(new ListPaymentsByImportDate($startDate, $endDate, $itemsPerPage, $page));
	}


	/**
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPaymentMethodsNames(?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new ListPaymentMethodsNames($itemsPerPage, $page));
	}


	/**
	 * @param int $paymentMethodId
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listAllPaymentMethodNamesForPaymentMethodId(
		int $paymentMethodId,
		?int $itemsPerPage = null,
		?int $page = null,
	): Response
	{
		return $this->connector->send(new ListAllPaymentMethodNamesForPaymentMethodId($paymentMethodId, $itemsPerPage, $page));
	}


	/**
	 * @param int $paymentMethodId
	 * @param int $lang
	 */
	public function getsPaymentMethodNameByIdAndLang(int $paymentMethodId, int $lang): Response
	{
		return $this->connector->send(new GetsPaymentMethodNameByIdAndLang($paymentMethodId, $lang));
	}


	/**
	 * @param bool $backendSearchable Receive only payment methods that are searchable for the backend.
	 * @param bool $backendActive Receive only payment methods that are active for the backend.
	 */
	public function listPaymentMethods(?bool $backendSearchable = null, ?bool $backendActive = null): Response
	{
		return $this->connector->send(new ListPaymentMethods($backendSearchable, $backendActive));
	}


	public function updatePaymentMethod(): Response
	{
		return $this->connector->send(new UpdatePaymentMethod());
	}


	public function createPaymentMethod(): Response
	{
		return $this->connector->send(new CreatePaymentMethod());
	}


	public function updatesPaymentMethods(): Response
	{
		return $this->connector->send(new UpdatesPaymentMethods());
	}


	public function getPaymentMethods(): Response
	{
		return $this->connector->send(new GetPaymentMethods());
	}


	/**
	 * @param string $language Language for backend payment method names
	 */
	public function getActivePaymentMethods(string $language): Response
	{
		return $this->connector->send(new GetActivePaymentMethods($language));
	}


	public function getPaymentMethodsAndIcons(): Response
	{
		return $this->connector->send(new GetPaymentMethodsAndIcons());
	}


	/**
	 * @param string $language Language for backend payment method names
	 */
	public function getSearchablePaymentMethods(string $language): Response
	{
		return $this->connector->send(new GetSearchablePaymentMethods($language));
	}


	/**
	 * @param int $language
	 */
	public function getDocumenBuilderActivePaymentMethods(int $language): Response
	{
		return $this->connector->send(new GetDocumenBuilderActivePaymentMethods($language));
	}


	/**
	 * @param string $language Language for backend payment method names
	 */
	public function getSubscriptionsHandlingPaymentMethods(string $language): Response
	{
		return $this->connector->send(new GetSubscriptionsHandlingPaymentMethods($language));
	}


	/**
	 * @param int $pluginKey
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function getPaymentMethod(int $pluginKey, ?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new GetPaymentMethod($pluginKey, $itemsPerPage, $page));
	}


	/**
	 * @param string $language Language for payment method names
	 */
	public function getPreviewListForPaymentMethod(string $language): Response
	{
		return $this->connector->send(new GetPreviewListForPaymentMethod($language));
	}


	/**
	 * @param int $methodId
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPaymentsOfPaymentMethod(int $methodId, ?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new ListPaymentsOfPaymentMethod($methodId, $itemsPerPage, $page));
	}


	/**
	 * @param int $orderId An order ID.
	 */
	public function detachAllThePaymentFromAndOrder(int $orderId): Response
	{
		return $this->connector->send(new DetachAllThePaymentFromAndOrder($orderId));
	}


	/**
	 * @param array $ids An array with payment ids to be autoassigned. Eg: ['ids' => [1,2,3]]
	 */
	public function assignPayments(?array $ids = null): Response
	{
		return $this->connector->send(new AssignPayments($ids));
	}


	/**
	 * @param int $orderId
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPaymentsOfOrder(int $orderId, ?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new ListPaymentsOfOrder($orderId, $itemsPerPage, $page));
	}


	/**
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listProperties(?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new ListProperties($itemsPerPage, $page));
	}


	public function updateProperty(): Response
	{
		return $this->connector->send(new UpdateProperty());
	}


	public function createProperty(): Response
	{
		return $this->connector->send(new CreateProperty());
	}


	/**
	 * @param string $startDate The start date of the date range for the date of creation of the property
	 * @param string $endDate The end date of the date range for the date of creation of the property
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPropertiesByCreationDate(
		?string $startDate = null,
		?string $endDate = null,
		?int $itemsPerPage = null,
		?int $page = null,
	): Response
	{
		return $this->connector->send(new ListPropertiesByCreationDate($startDate, $endDate, $itemsPerPage, $page));
	}


	/**
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPropertyTypes(?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new ListPropertyTypes($itemsPerPage, $page));
	}


	public function updatePropertyType(): Response
	{
		return $this->connector->send(new UpdatePropertyType());
	}


	public function createPropertyType(): Response
	{
		return $this->connector->send(new CreatePropertyType());
	}


	/**
	 * @param int $typeId
	 */
	public function getPropertyType(int $typeId): Response
	{
		return $this->connector->send(new GetPropertyType($typeId));
	}


	/**
	 * @param int $propertyId
	 */
	public function getProperty(int $propertyId): Response
	{
		return $this->connector->send(new GetProperty($propertyId));
	}


	/**
	 * @param int $propertyTypeId
	 * @param int $propertyValue
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPaymentsByPropertyTypeIdAndValue(
		int $propertyTypeId,
		int $propertyValue,
		?int $itemsPerPage = null,
		?int $page = null,
	): Response
	{
		return $this->connector->send(new ListPaymentsByPropertyTypeIdAndValue($propertyTypeId, $propertyValue, $itemsPerPage, $page));
	}


	/**
	 * @param int $paymentId Filter restricts the list of results to payments with the given payment ID/IDs. For example, .../search?paymentId=140 will search for payment ID 140 and .../search?paymentId=in:30,31 will search for payment ids 30 and 31
	 * @param int $status Filter restricts the list of results to payments with the given status ID.
	 * @param string $type Filter restricts the list of results to payments with the given payment type. For example, .../search?type=credit will list payments with payment type credit. Available payment types: 'credit' and 'debit'.
	 * @param int $amount Filter restricts the list of results to payments with the given payment amount.  For example, .../search?amount=between:120,250 will list all payments with amount between 120 and 250.
	 * @param int $transactionType Filter restricts the list of results to payments with the given transaction type ID.
	 * @param string $currency Currency iso code. Eg: EUR
	 * @param string $receivedAt Filter restricts the list of results to payments received during the specified period. The end date (to) is optional. If no end date is specified, payments received in the specified day will be listed. The dates can be specified in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../search?receivedAt=2020-04-16T00:00:00+03:00,2020-05-16T00:00:00+03:00 will list payments received between 2020-04-16 00:00 and 2020-05-16 23:59. .../search?receivedAt=2020-04-16T00:00:00+03:00 will list payments created on 2020-04-16.
	 * @param string $importedAt Filter restricts the list of results to payments imported during the specified period. The end date (to) is optional. If no end date is specified, payments imported in the specified day will be listed. The dates can be specified in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../search?importedAt=2020-04-16T00:00:00+03:00,2020-05-16T00:00:00+03:00 will list payments imported between 2020-04-16 00:00 and 2020-05-16 23:59. .../search?importedAt=2020-04-16T00:00:00+03:00 will list payments imported on 2020-04-16.
	 * @param string $assignedAt Filter restricts the list of results to payments imported during the specified period. The end date (to) is optional. If no end date is specified, payments imported in the specified day will be listed. The dates can be specified in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../search?importedAt=2020-04-16T00:00:00+03:00,2020-05-16T00:00:00+03:00 will list payments imported between 2020-04-16 00:00 and 2020-05-16 23:59. .../search?importedAt=2020-04-16T00:00:00+03:00 will list payments imported on 2020-04-16.
	 * @param int $mopId Filter restricts the list of results to payments through the give payment method(mopId).
	 * @param int $orderId Filter restricts the list of results to payments assigned to the given order(orderId). For example, .../search?orderId=14 will search for order ID 14 and .../search?orderId=in:3,4 will search for order ids 3 and 4
	 * @param int $assignment Filter restricts the list of results to payments which are assigned or detached. 1 = Assigned, 0 = Detached.
	 * @param string $transactionId Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param string $referenceId Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param string $bookingText Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param string $transactionCode Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param string $orderBy Allows you to sort payments by a given column and a certain order. For examople: .../search?orderBy=id:desc will sort payments by column id descending
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 * @param array $with The relations to load with the payment object. The relations available are parent, method, histories, properties, order or contact.
	 */
	public function searchPayments(
		?int $paymentId = null,
		?int $status = null,
		?string $type = null,
		?int $amount = null,
		?int $transactionType = null,
		?string $currency = null,
		?string $receivedAt = null,
		?string $importedAt = null,
		?string $assignedAt = null,
		?int $mopId = null,
		?int $orderId = null,
		?int $assignment = null,
		?string $transactionId = null,
		?string $referenceId = null,
		?string $bookingText = null,
		?string $transactionCode = null,
		?string $orderBy = null,
		?int $itemsPerPage = null,
		?int $page = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new SearchPayments($paymentId, $status, $type, $amount, $transactionType, $currency, $receivedAt, $importedAt, $assignedAt, $mopId, $orderId, $assignment, $transactionId, $referenceId, $bookingText, $transactionCode, $orderBy, $itemsPerPage, $page, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $paymentId Filter restricts the list of results to payments with the given payment ID/IDs. For example, .../search?paymentId=140 will search for payment ID 140 and .../search?paymentId=in:30,31 will search for payment ids 30 and 31
	 * @param int $status Filter restricts the list of results to payments with the given status ID.
	 * @param string $type Filter restricts the list of results to payments with the given payment type. For example, .../search?type=credit will list payments with payment type credit. Available payment types: 'credit' and 'debit'.
	 * @param int $amount Filter restricts the list of results to payments with the given payment amount.  For example, .../search?amount=between:120,250 will list all payments with amount between 120 and 250.
	 * @param int $transactionType Filter restricts the list of results to payments with the given transaction type ID.
	 * @param string $currency Currency iso code. Eg: EUR
	 * @param string $receivedAt Filter restricts the list of results to payments received during the specified period. The end date (to) is optional. If no end date is specified, payments received in the specified day will be listed. The dates can be specified in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../search?receivedAt=2020-04-16T00:00:00+03:00,2020-05-16T00:00:00+03:00 will list payments received between 2020-04-16 00:00 and 2020-05-16 23:59. .../search?receivedAt=2020-04-16T00:00:00+03:00 will list payments created on 2020-04-16.
	 * @param string $importedAt Filter restricts the list of results to payments imported during the specified period. The end date (to) is optional. If no end date is specified, payments imported in the specified day will be listed. The dates can be specified in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../search?importedAt=2020-04-16T00:00:00+03:00,2020-05-16T00:00:00+03:00 will list payments imported between 2020-04-16 00:00 and 2020-05-16 23:59. .../search?importedAt=2020-04-16T00:00:00+03:00 will list payments imported on 2020-04-16.
	 * @param string $assignedAt Filter restricts the list of results to payments imported during the specified period. The end date (to) is optional. If no end date is specified, payments imported in the specified day will be listed. The dates can be specified in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../search?importedAt=2020-04-16T00:00:00+03:00,2020-05-16T00:00:00+03:00 will list payments imported between 2020-04-16 00:00 and 2020-05-16 23:59. .../search?importedAt=2020-04-16T00:00:00+03:00 will list payments imported on 2020-04-16.
	 * @param int $mopId Filter restricts the list of results to payments through the give payment method(mopId).
	 * @param int $orderId Filter restricts the list of results to payments assigned to the given order(orderId). For example, .../search?orderId=14 will search for order ID 14 and .../search?orderId=in:3,4 will search for order ids 3 and 4
	 * @param int $assignment Filter restricts the list of results to payments which are assigned or detached. 1 = Assigned, 0 = Detached.
	 * @param string $transactionId Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param string $referenceId Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param string $bookingText Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param string $transactionCode Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param string $orderBy Allows you to sort payments by a given column and a certain order. For examople: .../search?orderBy=id:desc will sort payments by column id descending
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 * @param array $with The relations to load with the payment object. The relations available are parent, method, histories, properties, order or contact.
	 */
	public function searchPaymentsDuplicate2(
		?int $paymentId = null,
		?int $status = null,
		?string $type = null,
		?int $amount = null,
		?int $transactionType = null,
		?string $currency = null,
		?string $receivedAt = null,
		?string $importedAt = null,
		?string $assignedAt = null,
		?int $mopId = null,
		?int $orderId = null,
		?int $assignment = null,
		?string $transactionId = null,
		?string $referenceId = null,
		?string $bookingText = null,
		?string $transactionCode = null,
		?string $orderBy = null,
		?int $itemsPerPage = null,
		?int $page = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new SearchPayments($paymentId, $status, $type, $amount, $transactionType, $currency, $receivedAt, $importedAt, $assignedAt, $mopId, $orderId, $assignment, $transactionId, $referenceId, $bookingText, $transactionCode, $orderBy, $itemsPerPage, $page, $with));
	}


	/**
	 * @param int $statusId
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPaymentsOfPaymentStatus(int $statusId, ?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new ListPaymentsOfPaymentStatus($statusId, $itemsPerPage, $page));
	}


	/**
	 * @param int $transactionTypeId
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPaymentsOfTransactionType(
		int $transactionTypeId,
		?int $itemsPerPage = null,
		?int $page = null,
	): Response
	{
		return $this->connector->send(new ListPaymentsOfTransactionType($transactionTypeId, $itemsPerPage, $page));
	}


	/**
	 * @param int $paymentId
	 */
	public function getPayment(int $paymentId): Response
	{
		return $this->connector->send(new GetPayment($paymentId));
	}


	/**
	 * @param int $paymentId
	 */
	public function deletePayment(int $paymentId): Response
	{
		return $this->connector->send(new DeletePayment($paymentId));
	}


	/**
	 * @param int $paymentId
	 * @param int $itemsPerPage The number of items to list per page
	 * @param int $page The page of results to search for
	 */
	public function listPropertiesForPayment(int $paymentId, ?int $itemsPerPage = null, ?int $page = null): Response
	{
		return $this->connector->send(new ListPropertiesForPayment($paymentId, $itemsPerPage, $page));
	}
}
