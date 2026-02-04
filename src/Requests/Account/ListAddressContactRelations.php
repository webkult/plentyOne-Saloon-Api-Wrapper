<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List address contact relations
 *
 * Lists the address contact relations.
 */
class ListAddressContactRelations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/contact_relations";
	}


	/**
	 * @param null|int $id Filter that restricts the search result to address contact relations with a specific ID
	 * @param null|int $contactId Filter that restricts the search result to contacts with a specific ID
	 * @param null|int $typeId Filter that restricts the search result to address types with a specific ID
	 * @param null|int $addressId Filter that restricts the search result to addresses with a specific ID
	 * @param null|bool $isPrimary Filter that restricts the search result depending on the flag used. If the flag isPrimary=true is set, the filter restricts the search result to addresses that are primary addresses. If the flag isPrimary=false is set, the filter restricts the search results to addresses that are not primary addresses. If no flag is set, both primary and non-primary addresses are listed.
	 * @param null|int $page The page of results to search for
	 * @param null|int $itemsPerPage The number of items to list per page
	 * @param null|string $with Includes the specified address contact relation information in the results. The following parameters are available: contact and address. More than one parameter should be separated by commas.
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?int $contactId = null,
		protected ?int $typeId = null,
		protected ?int $addressId = null,
		protected ?bool $isPrimary = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'contactId' => $this->contactId,
			'typeId' => $this->typeId,
			'addressId' => $this->addressId,
			'isPrimary' => $this->isPrimary,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'with' => $this->with,
		]);
	}
}
