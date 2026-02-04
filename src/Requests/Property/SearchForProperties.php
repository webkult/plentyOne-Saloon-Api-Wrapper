<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for properties
 *
 * Searches for properties. Filters can be specified. Sort by argument can be specified. Sort order can
 * be specified.
 */
class SearchForProperties extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the property.</li><li>'amazon' = The amazon values of the property.</li><li>'options' = The options of the property.</li><li>'groups' = The groups of the property.</li></ul>
	 * @param null|string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param null|int $page The requested page of results. Default value is 1.
	 * @param null|int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 * @param null|int $id Filter restricts the list of results to properties which have have a matching ID. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param null|string $cast Filter restricts the list of results to properties which have have a matching cast. Possible search operators are: 'eq', 'in'
	 * @param null|int $group Filter restricts the list of results to properties which have have a matching group id. Possible search operators are: 'eq', 'in'
	 * @param null|string $name Filter restricts the list of results to properties which have have a matching name. Possible search operators are: 'eq', 'like'
	 * @param null|string $type Filter restricts the list of results to properties which have have a matching type. Possible search operators are: 'eq', 'in'
	 * @param null|string $updatedAt Filter restricts the list of results to properties which have a matching updatedAt. Possible search operators are: 'between', 'gte', 'lte', 'gt', 'lt'.
	 * @param null|string $optionUnits Filter restricts the list of results to properties which have a matching option with the type units. Possible search operators are: 'eq', 'in'.
	 * @param null|string $optionVatId Filter restricts the list of results to properties which have a matching option with the type vatId. Possible search operators are: 'eq', 'in'.
	 * @param null|string $optionDisplayOrder Filter restricts the list of results to properties which have a matching option with the type displayOrder. Possible search operators are: 'eq', 'in'.
	 * @param null|string $optionMarkup Filter restricts the list of results to properties which have a matching option with the type markup. Possible search operators are: 'eq', 'in'.
	 * @param null|string $optionMandatoryField Filter restricts the list of results to properties which have a matching option with the type mandatoryField. Possible search operators are: 'eq', 'in'.
	 * @param null|string $optionOrderProcess Filter restricts the list of results to properties which have a matching option with the type orderProcess. Possible search operators are: 'eq', 'in'.
	 * @param null|string $optionCustomerRegistration Filter restricts the list of results to properties which have a matching option with the type customerRegistration. Possible search operators are: 'eq', 'in'.
	 * @param null|string $optionContactSearch Filter restricts the list of results to properties which have a matching option with the type contactSearch. Possible search operators are: 'eq', 'in'.
	 * @param null|string $visibilityReferrers Filter restricts the list of results to properties which have a matching visibility with the type referrers. Possible search operators are: 'eq', 'in'.
	 * @param null|string $visibilityClients Filter restricts the list of results to properties which have a matching visibility with the type clients. Possible search operators are: 'eq', 'in'.
	 * @param null|string $visibilityDisplay Filter restricts the list of results to properties which have a matching visibility with the type display. Possible search operators are: 'eq', 'in'.
	 * @param null|string $visibilityOpportunityStatus Filter restricts the list of results to properties which have a matching visibility with the type opportunityStatus. Possible search operators are: 'eq', 'in'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $orderBy = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $id = null,
		protected ?string $cast = null,
		protected ?int $group = null,
		protected ?string $name = null,
		protected ?string $type = null,
		protected ?string $updatedAt = null,
		protected ?string $optionUnits = null,
		protected ?string $optionVatId = null,
		protected ?string $optionDisplayOrder = null,
		protected ?string $optionMarkup = null,
		protected ?string $optionMandatoryField = null,
		protected ?string $optionOrderProcess = null,
		protected ?string $optionCustomerRegistration = null,
		protected ?string $optionContactSearch = null,
		protected ?string $visibilityReferrers = null,
		protected ?string $visibilityClients = null,
		protected ?string $visibilityDisplay = null,
		protected ?string $visibilityOpportunityStatus = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'orderBy' => $this->orderBy,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'id' => $this->id,
			'cast' => $this->cast,
			'group' => $this->group,
			'name' => $this->name,
			'type' => $this->type,
			'updatedAt' => $this->updatedAt,
			'option.units' => $this->optionUnits,
			'option.vatId' => $this->optionVatId,
			'option.displayOrder' => $this->optionDisplayOrder,
			'option.markup' => $this->optionMarkup,
			'option.mandatoryField' => $this->optionMandatoryField,
			'option.orderProcess' => $this->optionOrderProcess,
			'option.customerRegistration' => $this->optionCustomerRegistration,
			'option.contactSearch' => $this->optionContactSearch,
			'visibility.referrers' => $this->visibilityReferrers,
			'visibility.clients' => $this->visibilityClients,
			'visibility.display' => $this->visibilityDisplay,
			'visibility.opportunityStatus' => $this->visibilityOpportunityStatus,
		]);
	}
}
