<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get System metrics
 *
 * Supply usage data for given plentymarkets system
 */
class GetSystemMetrics extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/system/metrics/{$this->plentyId}/{$this->date}";
	}


	/**
	 * @param int $plentyId
	 * @param int $date
	 */
	public function __construct(
		protected int $plentyId,
		protected int $date,
	) {
	}
}
