<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all listing marketplaces.
 *
 * List listing marketplaces. Use filters to find specific ones.
 */
class GetAllListingMarketplaces extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/listings/marketplaces";
	}


	/**
	 * @param null|float|int $referrerId Get only marketplaces that match the given referrer ID
	 * @param null|string $marketplaceId Get only marketplaces that match the given marketplace ID
	 * @param null|int $marketId Get only marketplaces that match the given market ID
	 * @param null|int $siteId Get only marketplaces that match the given site ID
	 */
	public function __construct(
		protected float|int|null $referrerId = null,
		protected ?string $marketplaceId = null,
		protected ?int $marketId = null,
		protected ?int $siteId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'referrerId' => $this->referrerId,
			'marketplaceId' => $this->marketplaceId,
			'marketId' => $this->marketId,
			'siteId' => $this->siteId,
		]);
	}
}
