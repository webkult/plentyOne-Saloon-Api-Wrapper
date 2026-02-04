<?php

namespace PlentyOne\Api\Requests\Returns;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a return order
 *
 * Update return order by a given ID. The return order ID is mandatory.
 */
class UpdateReturnOrder extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/returns/{$this->returnsId}";
	}


	/**
	 * @param int $returnsId
	 * @param int $returnsId Return order ID
	 * @param null|int $orderId Order ID for the return order
	 * @param null|int $providerId Return provider ID
	 * @param null|string $externalNumber Returns package number
	 * @param null|string $base64label Label in base64 format
	 */
	public function __construct(
		protected int $returnsId,
		protected ?int $orderId = null,
		protected ?int $providerId = null,
		protected ?string $externalNumber = null,
		protected ?string $base64label = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'$returnsId' => $this->returnsId,
			'$orderId' => $this->orderId,
			'$providerId' => $this->providerId,
			'$externalNumber' => $this->externalNumber,
			'$base64Label' => $this->base64label,
		]);
	}
}
