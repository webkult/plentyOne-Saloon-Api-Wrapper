<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a VAT configuration for the standard accounting location of a client
 *
 * Gets the VAT configuration currently used for the country of the standard accounting location of a
 * client (store). The ID of the client (store) must be specified.
 */
class GetVatConfigurationForTheStandardAccountingLocationOfClient extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/vat/standard";
	}


	/**
	 * @param null|int $plentyId The plenty ID of the client (store)
	 * @param null|string $startedAt The date in the W3C format when the vat configuration went into effect
	 */
	public function __construct(
		protected ?int $plentyId = null,
		protected ?string $startedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['plentyId' => $this->plentyId, 'startedAt' => $this->startedAt]);
	}
}
