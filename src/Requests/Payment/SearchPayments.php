<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Search payments
 *
 * Search payments by defined filters which can be send with the request.
 */
class SearchPayments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/search";
	}


	/**
	 * @param null|int $paymentId Filter restricts the list of results to payments with the given payment ID/IDs. For example, .../search?paymentId=140 will search for payment ID 140 and .../search?paymentId=in:30,31 will search for payment ids 30 and 31
	 * @param null|int $status Filter restricts the list of results to payments with the given status ID.
	 * @param null|string $type Filter restricts the list of results to payments with the given payment type. For example, .../search?type=credit will list payments with payment type credit. Available payment types: 'credit' and 'debit'.
	 * @param null|int $amount Filter restricts the list of results to payments with the given payment amount.  For example, .../search?amount=between:120,250 will list all payments with amount between 120 and 250.
	 * @param null|int $transactionType Filter restricts the list of results to payments with the given transaction type ID.
	 * @param null|string $currency Currency iso code. Eg: EUR
	 * @param null|string $receivedAt Filter restricts the list of results to payments received during the specified period. The end date (to) is optional. If no end date is specified, payments received in the specified day will be listed. The dates can be specified in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../search?receivedAt=2020-04-16T00:00:00+03:00,2020-05-16T00:00:00+03:00 will list payments received between 2020-04-16 00:00 and 2020-05-16 23:59. .../search?receivedAt=2020-04-16T00:00:00+03:00 will list payments created on 2020-04-16.
	 * @param null|string $importedAt Filter restricts the list of results to payments imported during the specified period. The end date (to) is optional. If no end date is specified, payments imported in the specified day will be listed. The dates can be specified in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../search?importedAt=2020-04-16T00:00:00+03:00,2020-05-16T00:00:00+03:00 will list payments imported between 2020-04-16 00:00 and 2020-05-16 23:59. .../search?importedAt=2020-04-16T00:00:00+03:00 will list payments imported on 2020-04-16.
	 * @param null|string $assignedAt Filter restricts the list of results to payments imported during the specified period. The end date (to) is optional. If no end date is specified, payments imported in the specified day will be listed. The dates can be specified in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../search?importedAt=2020-04-16T00:00:00+03:00,2020-05-16T00:00:00+03:00 will list payments imported between 2020-04-16 00:00 and 2020-05-16 23:59. .../search?importedAt=2020-04-16T00:00:00+03:00 will list payments imported on 2020-04-16.
	 * @param null|int $mopId Filter restricts the list of results to payments through the give payment method(mopId).
	 * @param null|int $orderId Filter restricts the list of results to payments assigned to the given order(orderId). For example, .../search?orderId=14 will search for order ID 14 and .../search?orderId=in:3,4 will search for order ids 3 and 4
	 * @param null|int $assignment Filter restricts the list of results to payments which are assigned or detached. 1 = Assigned, 0 = Detached.
	 * @param null|string $transactionId Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param null|string $referenceId Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param null|string $bookingText Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param null|string $transactionCode Filter restricts the list of results to payments that have the property type ID 1 and property value contains a given value. For example, .../search?transactionId=1,test will list all payments that have the property type ID 1 and property value contains the text 'test'.
	 * @param null|string $orderBy Allows you to sort payments by a given column and a certain order. For examople: .../search?orderBy=id:desc will sort payments by column id descending
	 * @param null|int $itemsPerPage The number of items to list per page
	 * @param null|int $page The page of results to search for
	 * @param null|array $with The relations to load with the payment object. The relations available are parent, method, histories, properties, order or contact.
	 */
	public function __construct(
		protected ?int $paymentId = null,
		protected ?int $status = null,
		protected ?string $type = null,
		protected ?int $amount = null,
		protected ?int $transactionType = null,
		protected ?string $currency = null,
		protected ?string $receivedAt = null,
		protected ?string $importedAt = null,
		protected ?string $assignedAt = null,
		protected ?int $mopId = null,
		protected ?int $orderId = null,
		protected ?int $assignment = null,
		protected ?string $transactionId = null,
		protected ?string $referenceId = null,
		protected ?string $bookingText = null,
		protected ?string $transactionCode = null,
		protected ?string $orderBy = null,
		protected ?int $itemsPerPage = null,
		protected ?int $page = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'paymentId' => $this->paymentId,
			'status' => $this->status,
			'type' => $this->type,
			'amount' => $this->amount,
			'transactionType' => $this->transactionType,
			'currency' => $this->currency,
			'receivedAt' => $this->receivedAt,
			'importedAt' => $this->importedAt,
			'assignedAt' => $this->assignedAt,
			'mopId' => $this->mopId,
			'orderId' => $this->orderId,
			'assignment' => $this->assignment,
			'transactionId' => $this->transactionId,
			'referenceId' => $this->referenceId,
			'bookingText' => $this->bookingText,
			'transactionCode' => $this->transactionCode,
			'orderBy' => $this->orderBy,
			'itemsPerPage' => $this->itemsPerPage,
			'page' => $this->page,
			'with' => $this->with,
		]);
	}
}
