<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Start the market listing on the designated market.
 *
 * Starts the market listing on the designated markets.
 */
class StartTheMarketListingOnTheDesignatedMarket extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/start/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing market that needs to be started. This can also be passed as an array.
	 * @param null|string $startAt When should the listings be started. The date has to be in the format, e.g. '2019-04-04 12:40:00'.
	 * @param null|int $distribution The number of minutes that the listing should be started.
	 */
	public function __construct(
		protected int $id,
		protected ?string $startAt = null,
		protected ?int $distribution = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['startAt' => $this->startAt, 'distribution' => $this->distribution]);
	}
}
