<?php

namespace PlentyOne\Api\Requests\Returns;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a return order
 *
 * Add return order to an orderId
 */
class CreateReturnOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/returns";
	}


	/**
	 * @param int $orderId
	 * @param int $orderId Order ID
	 * @param int $providerId Return provider ID
	 * @param string $externalNumber Returns package number
	 * @param null|string $base64label Label in base64 format
	 */
	public function __construct(
		protected int $orderId,
		protected int $providerId,
		protected string $externalNumber,
		protected ?string $base64label = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'$orderId' => $this->orderId,
			'$providerId' => $this->providerId,
			'$externalNumber' => $this->externalNumber,
			'$base64Label' => $this->base64label,
		]);
	}
}
