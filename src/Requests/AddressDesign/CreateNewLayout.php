<?php

namespace PlentyOne\Api\Requests\AddressDesign;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create new layout
 *
 * Creates a new layout with the name and isDefault flag given.
 */
class CreateNewLayout extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/address_layout";
	}


	/**
	 * @param string $layout The layout array
	 */
	public function __construct(
		protected string $layout,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['layout' => $this->layout]);
	}
}
