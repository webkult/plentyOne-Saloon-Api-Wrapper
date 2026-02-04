<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate reorder document of an order
 *
 * Generate reorder document of an order. The ID of the order must be specified.
 * The document can only
 * be generated for orders of the type 'reorder'.
 */
class GenerateReorderDocumentOfOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/reorder/generate";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param null|bool $allowRegenerate If true, existing reorder document is generated once again.
	 * @param null|string $comment Comment that appears below the stock units.
	 */
	public function __construct(
		protected int $orderId,
		protected ?bool $allowRegenerate = null,
		protected ?string $comment = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['allowRegenerate' => $this->allowRegenerate, 'comment' => $this->comment]);
	}
}
