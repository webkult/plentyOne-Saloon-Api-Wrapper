<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List listing shipping profiles
 *
 * Lists listing shipping profiles.
 */
class ListListingShippingProfiles extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/shipping_profiles";
	}


	/**
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|int $id Filter that restricts the search result to listing shipping profiles that match the given ID(s).
	 * @param null|float|int $referrerId Filter that restricts the search result to listing shipping profiles with given referrer ID(s).
	 * @param null|int $credentialsId Filter that restricts the search result to listing shipping profiles with given credential ID(s).
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $id = null,
		protected float|int|null $referrerId = null,
		protected ?int $credentialsId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'id' => $this->id,
			'referrerId' => $this->referrerId,
			'credentialsId' => $this->credentialsId,
		]);
	}
}
