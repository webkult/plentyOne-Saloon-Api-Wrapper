<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a property market
 *
 * Creates a property market.
 */
class CreatePropertyMarket extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/markets";
	}


	/**
	 * @param int $propertyId Property id
	 * @param float|int $referrerId The referrer id of the property market
	 * @param int $referrerSubId The referrer sub id of the property market
	 * @param string $value The value of the property market
	 */
	public function __construct(
		protected int $propertyId,
		protected float|int $referrerId,
		protected int $referrerSubId,
		protected string $value,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'propertyId' => $this->propertyId,
			'referrerId' => $this->referrerId,
			'referrerSubId' => $this->referrerSubId,
			'value' => $this->value,
		]);
	}
}
