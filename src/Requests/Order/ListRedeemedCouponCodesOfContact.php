<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List redeemed coupon codes of a contact
 *
 * Lists the redeemed coupon codes of contact. The ID of the contact must be specified.
 */
class ListRedeemedCouponCodesOfContact extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/coupons/codes/contacts/{$this->contactId}";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param null|int $page The page to get. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of coupons to be displayed per page. The default number of coupons per page is 50.
	 */
	public function __construct(
		protected int $contactId,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
