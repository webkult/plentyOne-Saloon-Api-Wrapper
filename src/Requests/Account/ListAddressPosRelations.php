<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List address POS relations
 *
 * Lists the address POS relations.
 */
class ListAddressPosRelations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/pos_relations";
	}


	/**
	 * @param null|int $page page
	 * @param null|int $itemsPerPage items per page
	 * @param null|string $with Includes the specified address pos relation information in the results. The following parameters are available: address and type. More than one parameter should be separated by commas.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage, 'with' => $this->with]);
	}
}
