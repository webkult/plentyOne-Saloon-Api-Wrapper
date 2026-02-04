<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List revenue account configurations
 *
 * Lists revenue account configurations of a system. The revenue accounts are returned as paginated
 * result. By default 50 revenue accounts are on one page.
 */
class ListRevenueAccountConfigurations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/revenue_account_configurations";
	}


	/**
	 * @param null|int $page The page to get. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of revenue accounts to be displayed per page. The default number of orders per page is 50.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
