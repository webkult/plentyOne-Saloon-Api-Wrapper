<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List contact option types
 *
 * Lists all contact option types.
 */
class ListContactOptionTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/option_types";
	}


	/**
	 * @param null|string $with Lists possible option sub-types for each listed option if the parameter 'subTypes' is set.
	 */
	public function __construct(
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
