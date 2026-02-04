<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Account\AnonymizeContact;
use PlentyOne\Api\Requests\Account\ApplySelectedGroupFunctionOptionsForGivenContactIds;
use PlentyOne\Api\Requests\Account\BatchUpdate;
use PlentyOne\Api\Requests\Account\ConvertGuestAccountIntoRegularAccount;
use PlentyOne\Api\Requests\Account\CreateAddress;
use PlentyOne\Api\Requests\Account\CreateAddressContactRelations;
use PlentyOne\Api\Requests\Account\CreateAddressForExistingContact;
use PlentyOne\Api\Requests\Account\CreateAddressForExistingOrder;
use PlentyOne\Api\Requests\Account\CreateAddressForExistingWarehouse;
use PlentyOne\Api\Requests\Account\CreateAddressOption;
use PlentyOne\Api\Requests\Account\CreateAddressOptionType;
use PlentyOne\Api\Requests\Account\CreateAddressPosRelation;
use PlentyOne\Api\Requests\Account\CreateAddressWarehouseRelation;
use PlentyOne\Api\Requests\Account\CreateBankAccount;
use PlentyOne\Api\Requests\Account\CreateCompany;
use PlentyOne\Api\Requests\Account\CreateCompanyContactRelation;
use PlentyOne\Api\Requests\Account\CreateCompanyForExistingContact;
use PlentyOne\Api\Requests\Account\CreateContact;
use PlentyOne\Api\Requests\Account\CreateContactDepartment;
use PlentyOne\Api\Requests\Account\CreateContactEvent;
use PlentyOne\Api\Requests\Account\CreateContactOption;
use PlentyOne\Api\Requests\Account\CreateContactOptionSubType;
use PlentyOne\Api\Requests\Account\CreateContactOptionType;
use PlentyOne\Api\Requests\Account\CreateContactPosition;
use PlentyOne\Api\Requests\Account\CreateContactType;
use PlentyOne\Api\Requests\Account\CreateJobWithGivenData;
use PlentyOne\Api\Requests\Account\CreateRegionForSalesRepresentative;
use PlentyOne\Api\Requests\Account\CreatesContactClass;
use PlentyOne\Api\Requests\Account\DeleteAddress;
use PlentyOne\Api\Requests\Account\DeleteAddressContactRelation;
use PlentyOne\Api\Requests\Account\DeleteAddressOfTheContact;
use PlentyOne\Api\Requests\Account\DeleteAddressOptionByAddressId;
use PlentyOne\Api\Requests\Account\DeleteAddressOptionByOptionId;
use PlentyOne\Api\Requests\Account\DeleteAddressOptionType;
use PlentyOne\Api\Requests\Account\DeleteAddressPosRelation;
use PlentyOne\Api\Requests\Account\DeleteAddressWarehouseRelation;
use PlentyOne\Api\Requests\Account\DeleteBankAccount;
use PlentyOne\Api\Requests\Account\DeleteBatchOfCompanies;
use PlentyOne\Api\Requests\Account\DeleteCompany;
use PlentyOne\Api\Requests\Account\DeleteCompanyContactRelation;
use PlentyOne\Api\Requests\Account\DeleteCompanyOfTheContact;
use PlentyOne\Api\Requests\Account\DeleteContact;
use PlentyOne\Api\Requests\Account\DeleteContactDepartment;
use PlentyOne\Api\Requests\Account\DeleteContactEvent;
use PlentyOne\Api\Requests\Account\DeleteContactOption;
use PlentyOne\Api\Requests\Account\DeleteContactOptionSubType;
use PlentyOne\Api\Requests\Account\DeleteContactOptionType;
use PlentyOne\Api\Requests\Account\DeleteContactPosition;
use PlentyOne\Api\Requests\Account\DeleteContactType;
use PlentyOne\Api\Requests\Account\DeleteFilesFromContactDocuments;
use PlentyOne\Api\Requests\Account\DeleteJobByGivenId;
use PlentyOne\Api\Requests\Account\DeleteRegion;
use PlentyOne\Api\Requests\Account\DeletesContactClass;
use PlentyOne\Api\Requests\Account\GetAddress;
use PlentyOne\Api\Requests\Account\GetAddressContactRelation;
use PlentyOne\Api\Requests\Account\GetAddressDataByAddressId;
use PlentyOne\Api\Requests\Account\GetAddressOption;
use PlentyOne\Api\Requests\Account\GetAddressOptionType;
use PlentyOne\Api\Requests\Account\GetAddressPosRelation;
use PlentyOne\Api\Requests\Account\GetAddresses;
use PlentyOne\Api\Requests\Account\GetBankAccount;
use PlentyOne\Api\Requests\Account\GetCompany;
use PlentyOne\Api\Requests\Account\GetCompanyContactRelation;
use PlentyOne\Api\Requests\Account\GetCompanyOfTheContact;
use PlentyOne\Api\Requests\Account\GetContact;
use PlentyOne\Api\Requests\Account\GetContactDepartment;
use PlentyOne\Api\Requests\Account\GetContactEventTypesAsKeyValueArray;
use PlentyOne\Api\Requests\Account\GetContactOption;
use PlentyOne\Api\Requests\Account\GetContactOptionSubType;
use PlentyOne\Api\Requests\Account\GetContactOptionType;
use PlentyOne\Api\Requests\Account\GetContactPosition;
use PlentyOne\Api\Requests\Account\GetContactType;
use PlentyOne\Api\Requests\Account\GetLoginUrl;
use PlentyOne\Api\Requests\Account\GetPaginatedListOfJobsBasedOnProvidedParameters;
use PlentyOne\Api\Requests\Account\GetPrimaryOrLastCreatedAddressesOfContact;
use PlentyOne\Api\Requests\Account\GetRegionByContactIdAndAccountId;
use PlentyOne\Api\Requests\Account\GetRegionById;
use PlentyOne\Api\Requests\Account\GetSalesRepresentativeOfRegion;
use PlentyOne\Api\Requests\Account\GetSingleJobById;
use PlentyOne\Api\Requests\Account\GetStorageObjectFromContactDocuments;
use PlentyOne\Api\Requests\Account\GetTemporaryUrlForDocument;
use PlentyOne\Api\Requests\Account\GetVcardFilestreamOfContact;
use PlentyOne\Api\Requests\Account\ListAddressContactRelations;
use PlentyOne\Api\Requests\Account\ListAddressOptionTypes;
use PlentyOne\Api\Requests\Account\ListAddressOptions;
use PlentyOne\Api\Requests\Account\ListAddressPosRelations;
use PlentyOne\Api\Requests\Account\ListAddressRelationTypes;
use PlentyOne\Api\Requests\Account\ListAddressesThatAreLinkedWithContacts;
use PlentyOne\Api\Requests\Account\ListAllGroupFunctionRelatedData;
use PlentyOne\Api\Requests\Account\ListBankAccounts;
use PlentyOne\Api\Requests\Account\ListBankAccountsPaginated;
use PlentyOne\Api\Requests\Account\ListCompanies;
use PlentyOne\Api\Requests\Account\ListContactClasses;
use PlentyOne\Api\Requests\Account\ListContactClassesPaginated;
use PlentyOne\Api\Requests\Account\ListContactDepartments;
use PlentyOne\Api\Requests\Account\ListContactEvents;
use PlentyOne\Api\Requests\Account\ListContactEventsByContactId;
use PlentyOne\Api\Requests\Account\ListContactOptionSubTypes;
use PlentyOne\Api\Requests\Account\ListContactOptionTypes;
use PlentyOne\Api\Requests\Account\ListContactOptions;
use PlentyOne\Api\Requests\Account\ListContactPositions;
use PlentyOne\Api\Requests\Account\ListContactRelatedData;
use PlentyOne\Api\Requests\Account\ListContactTypes;
use PlentyOne\Api\Requests\Account\ListContacts;
use PlentyOne\Api\Requests\Account\ListDocumentsOfContact;
use PlentyOne\Api\Requests\Account\ListOrderAddresses;
use PlentyOne\Api\Requests\Account\ListRegionsByContactId;
use PlentyOne\Api\Requests\Account\ListWarehouseAddresses;
use PlentyOne\Api\Requests\Account\LoginFrontendUser;
use PlentyOne\Api\Requests\Account\LogoutFrontendUser;
use PlentyOne\Api\Requests\Account\RefreshAccessToken;
use PlentyOne\Api\Requests\Account\ResetContactPrimaryAddress;
use PlentyOne\Api\Requests\Account\ReturnsContactClassModelBasedOnId;
use PlentyOne\Api\Requests\Account\SendPasswordLinkForContact;
use PlentyOne\Api\Requests\Account\SetContactAddressPerAddressTypeAsPrimaryAddress;
use PlentyOne\Api\Requests\Account\UnblockContact;
use PlentyOne\Api\Requests\Account\UpdateAddress;
use PlentyOne\Api\Requests\Account\UpdateAddressContactRelations;
use PlentyOne\Api\Requests\Account\UpdateAddressForExistingOrder;
use PlentyOne\Api\Requests\Account\UpdateAddressOfTheContact;
use PlentyOne\Api\Requests\Account\UpdateAddressOption;
use PlentyOne\Api\Requests\Account\UpdateAddressOptionByAddressId;
use PlentyOne\Api\Requests\Account\UpdateAddressOptionType;
use PlentyOne\Api\Requests\Account\UpdateAddressPosRelation;
use PlentyOne\Api\Requests\Account\UpdateAddressWarehouseRelation;
use PlentyOne\Api\Requests\Account\UpdateBankAccount;
use PlentyOne\Api\Requests\Account\UpdateCompany;
use PlentyOne\Api\Requests\Account\UpdateContact;
use PlentyOne\Api\Requests\Account\UpdateContactDepartment;
use PlentyOne\Api\Requests\Account\UpdateContactEvent;
use PlentyOne\Api\Requests\Account\UpdateContactOption;
use PlentyOne\Api\Requests\Account\UpdateContactOptionSubType;
use PlentyOne\Api\Requests\Account\UpdateContactOptionType;
use PlentyOne\Api\Requests\Account\UpdateContactPosition;
use PlentyOne\Api\Requests\Account\UpdateContactType;
use PlentyOne\Api\Requests\Account\UpdateExistingDocumentLink;
use PlentyOne\Api\Requests\Account\UpdateJobNamesWithGivenDataTheIdOfTheJobMustBeSpecified;
use PlentyOne\Api\Requests\Account\UpdatePasswordForContact;
use PlentyOne\Api\Requests\Account\UpdateRegion;
use PlentyOne\Api\Requests\Account\UpdatesAccountContactRelationIsPrimaryField;
use PlentyOne\Api\Requests\Account\UpdatesContactClass;
use PlentyOne\Api\Requests\Account\UploadDocumentToContactDirectory;
use PlentyOne\Api\Requests\Account\ValidateContactOptionByGivenValue;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Account extends BaseResource
{
	public function loginFrontendUser(): Response
	{
		return $this->connector->send(new LoginFrontendUser());
	}


	public function refreshAccessToken(): Response
	{
		return $this->connector->send(new RefreshAccessToken());
	}


	public function logoutFrontendUser(): Response
	{
		return $this->connector->send(new LogoutFrontendUser());
	}


	/**
	 * @param string $updatedAt Filter that restricts the search result to accounts that were updated according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'updatedAt=between:yyyy-mm-dd,yyyy-mm-dd'</li>
	 *     <li>'updatedAt=eq:yyyy-mm-dd' (=)</li>
	 *     <li>'updatedAt=gt:yyyy-mm-dd' (>)</li>
	 *     <li>'updatedAt=gte:yyyy-mm-dd' (>=)</li>
	 *     <li>'updatedAt=lt:yyyy-mm-dd' (<)</li>
	 *     <li>'updatedAt=lte:yyyy-mm-dd' (<=)</li>
	 *     <li>Dates can also include the time. Example: 2017-03-08 13:24:17</li>
	 *     <li>Without including the time we will use 00:00:00 as default. Example: 2017-03-08 00:00:00</li>
	 *     </ul>
	 * @param string $createdAt Filter that restricts the search result to accounts that were created according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'createdAt=between:yyyy-mm-dd,yyyy-mm-dd'</li>
	 *     <li>'createdAt=eq:yyyy-mm-dd' (=)</li>
	 *     <li>'createdAt=gt:yyyy-mm-dd' (>)</li>
	 *     <li>'createdAt=gte:yyyy-mm-dd' (>=)</li>
	 *     <li>'createdAt=lt:yyyy-mm-dd' (<)</li>
	 *     <li>'createdAt=lte:yyyy-mm-dd' (<=)</li>
	 *     <li>Dates can also include the time. Example: 2017-03-08 13:24:17</li>
	 *     <li>Without including the time we will use 00:00:00 as default. Example: 2017-03-08 00:00:00</li>
	 *     </ul>
	 * @param int $id Filter that restricts the search result to companies that have an ID according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'id=eq:ID' (=) </li>
	 *     </ul>
	 * @param string $companyName Filter that restricts the search result to companies that have a company name according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'companyName=like:expamle'</li>
	 *     <li>'companyName=eq:example' (=)</li>
	 *     </ul>
	 * @param int $userId Filter that restricts the search result to companies that have a userId / ownerId according
	 *      *      to given filters.
	 *     <br> Usage: <ul>
	 *     <li>'userId=eq:ID' (=) </li>
	 *     </ul>
	 * @param string $sortBy Enables the sorting of fields. SortBy has as parameter.
	 *      *      The name of the field will also be sorted.
	 * @param string $sortOrder Enables to sort the result in an ascending and descending order.
	 *      *      When you want to sort the results in ascending order, use  <code>asc</code>.
	 *      *      When you want to sort the result in descending order, use <code>desc</code>.
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param string $with Includes the specified contact information in the results.
	 *      *      The following parameters are available:
	 *      *          <code>contacts</code>,
	 *      *          <code>contactRelations</code>,
	 *      *          <code>contactsPrimaryBillingAddress</code>,
	 *      *          <code>salesRepresentativeRegions</code>.
	 *      *      More than one parameter should be separated by commas
	 */
	public function listCompanies(
		?string $updatedAt = null,
		?string $createdAt = null,
		?int $id = null,
		?string $companyName = null,
		?int $userId = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $with = null,
	): Response
	{
		return $this->connector->send(new ListCompanies($updatedAt, $createdAt, $id, $companyName, $userId, $sortBy, $sortOrder, $page, $itemsPerPage, $with));
	}


	public function createCompany(): Response
	{
		return $this->connector->send(new CreateCompany());
	}


	/**
	 * @param string $updatedTo Filter that restricts the search result to addresses that were updated before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $updatedFrom Filter that restricts the search result to addresses that were updated after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $createdTo Filter that restricts the search result to addresses that were created before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $createdFrom Filter that restricts the search result to addresses that were created after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $with Includes the specified address information in the results. The following parameters are available: contactRelations, orderRelations. More than one parameter should be separated by commas.
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 */
	public function getAddresses(
		?string $updatedTo = null,
		?string $updatedFrom = null,
		?string $createdTo = null,
		?string $createdFrom = null,
		?string $with = null,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new GetAddresses($updatedTo, $updatedFrom, $createdTo, $createdFrom, $with, $page, $itemsPerPage));
	}


	public function createAddress(): Response
	{
		return $this->connector->send(new CreateAddress());
	}


	/**
	 * @param int $id Filter that restricts the search result to address contact relations with a specific ID
	 * @param int $contactId Filter that restricts the search result to contacts with a specific ID
	 * @param int $typeId Filter that restricts the search result to address types with a specific ID
	 * @param int $addressId Filter that restricts the search result to addresses with a specific ID
	 * @param bool $isPrimary Filter that restricts the search result depending on the flag used. If the flag isPrimary=true is set, the filter restricts the search result to addresses that are primary addresses. If the flag isPrimary=false is set, the filter restricts the search results to addresses that are not primary addresses. If no flag is set, both primary and non-primary addresses are listed.
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 * @param string $with Includes the specified address contact relation information in the results. The following parameters are available: contact and address. More than one parameter should be separated by commas.
	 */
	public function listAddressContactRelations(
		?int $id = null,
		?int $contactId = null,
		?int $typeId = null,
		?int $addressId = null,
		?bool $isPrimary = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $with = null,
	): Response
	{
		return $this->connector->send(new ListAddressContactRelations($id, $contactId, $typeId, $addressId, $isPrimary, $page, $itemsPerPage, $with));
	}


	public function updateAddressContactRelations(): Response
	{
		return $this->connector->send(new UpdateAddressContactRelations());
	}


	public function createAddressContactRelations(): Response
	{
		return $this->connector->send(new CreateAddressContactRelations());
	}


	/**
	 * @param int $addressContactRelationId The ID of the address contact relation
	 */
	public function getAddressContactRelation(int $addressContactRelationId): Response
	{
		return $this->connector->send(new GetAddressContactRelation($addressContactRelationId));
	}


	/**
	 * @param int $addressContactRelationId The ID of the address contact relation
	 */
	public function deleteAddressContactRelation(int $addressContactRelationId): Response
	{
		return $this->connector->send(new DeleteAddressContactRelation($addressContactRelationId));
	}


	public function listAddressOptionTypes(): Response
	{
		return $this->connector->send(new ListAddressOptionTypes());
	}


	public function createAddressOptionType(): Response
	{
		return $this->connector->send(new CreateAddressOptionType());
	}


	/**
	 * @param int $optionTypeId The ID of the address option type
	 */
	public function getAddressOptionType(int $optionTypeId): Response
	{
		return $this->connector->send(new GetAddressOptionType($optionTypeId));
	}


	/**
	 * @param int $optionTypeId The ID of the address option type
	 */
	public function updateAddressOptionType(int $optionTypeId): Response
	{
		return $this->connector->send(new UpdateAddressOptionType($optionTypeId));
	}


	/**
	 * @param int $optionTypeId The ID of the address option type
	 */
	public function deleteAddressOptionType(int $optionTypeId): Response
	{
		return $this->connector->send(new DeleteAddressOptionType($optionTypeId));
	}


	/**
	 * @param int $optionId The ID of the address option
	 */
	public function getAddressOption(int $optionId): Response
	{
		return $this->connector->send(new GetAddressOption($optionId));
	}


	/**
	 * @param int $optionId The ID of the address option
	 */
	public function updateAddressOption(int $optionId): Response
	{
		return $this->connector->send(new UpdateAddressOption($optionId));
	}


	/**
	 * @param int $optionId The ID of the address option
	 */
	public function deleteAddressOptionByOptionId(int $optionId): Response
	{
		return $this->connector->send(new DeleteAddressOptionByOptionId($optionId));
	}


	/**
	 * @param int $page page
	 * @param int $itemsPerPage items per page
	 * @param string $with Includes the specified address pos relation information in the results. The following parameters are available: address and type. More than one parameter should be separated by commas.
	 */
	public function listAddressPosRelations(?int $page = null, ?int $itemsPerPage = null, ?string $with = null): Response
	{
		return $this->connector->send(new ListAddressPosRelations($page, $itemsPerPage, $with));
	}


	public function createAddressPosRelation(): Response
	{
		return $this->connector->send(new CreateAddressPosRelation());
	}


	/**
	 * @param int $addressPosRelationId The ID of the address POS relation
	 */
	public function getAddressPosRelation(int $addressPosRelationId): Response
	{
		return $this->connector->send(new GetAddressPosRelation($addressPosRelationId));
	}


	/**
	 * @param int $addressPosRelationId The ID of the address POS relation
	 */
	public function updateAddressPosRelation(int $addressPosRelationId): Response
	{
		return $this->connector->send(new UpdateAddressPosRelation($addressPosRelationId));
	}


	/**
	 * @param int $addressPosRelationId The ID of the address POS relation
	 */
	public function deleteAddressPosRelation(int $addressPosRelationId): Response
	{
		return $this->connector->send(new DeleteAddressPosRelation($addressPosRelationId));
	}


	public function listAddressRelationTypes(): Response
	{
		return $this->connector->send(new ListAddressRelationTypes());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $application The application type
	 * @param string $lang The language as ISO 639-1 code (e.g. `en` for English)
	 */
	public function listAddressRelationTypesDuplicate1(string $application, string $lang): Response
	{
		return $this->connector->send(new ListAddressRelationTypes($application, $lang));
	}


	public function createAddressWarehouseRelation(): Response
	{
		return $this->connector->send(new CreateAddressWarehouseRelation());
	}


	/**
	 * @param int $relationId The ID of the address warehouse relation
	 */
	public function updateAddressWarehouseRelation(int $relationId): Response
	{
		return $this->connector->send(new UpdateAddressWarehouseRelation($relationId));
	}


	/**
	 * @param int $relationId The ID of the address warehouse relation
	 */
	public function deleteAddressWarehouseRelation(int $relationId): Response
	{
		return $this->connector->send(new DeleteAddressWarehouseRelation($relationId));
	}


	/**
	 * @param int $addressId The ID of the address
	 * @param string $with Includes the specified address information in the results. The following parameters are available: <code>options</code>, <code>contactRelations</code>, <code>orderRelations</code>, <code>warehouseRelations</code>, <code>schedulerRelations</code>, <code>reorderRelations</code>. More than one parameter should be separated by commas
	 */
	public function getAddress(int $addressId, ?string $with = null): Response
	{
		return $this->connector->send(new GetAddress($addressId, $with));
	}


	/**
	 * @param int $addressId The ID of the address
	 */
	public function updateAddress(int $addressId): Response
	{
		return $this->connector->send(new UpdateAddress($addressId));
	}


	/**
	 * @param int $addressId The ID of the address
	 */
	public function deleteAddress(int $addressId): Response
	{
		return $this->connector->send(new DeleteAddress($addressId));
	}


	/**
	 * @param int $addressId The ID of the address
	 */
	public function listAddressOptions(int $addressId): Response
	{
		return $this->connector->send(new ListAddressOptions($addressId));
	}


	/**
	 * @param int $addressId The ID of the address
	 */
	public function updateAddressOptionByAddressId(int $addressId): Response
	{
		return $this->connector->send(new UpdateAddressOptionByAddressId($addressId));
	}


	/**
	 * @param int $addressId The ID of the address
	 */
	public function createAddressOption(int $addressId): Response
	{
		return $this->connector->send(new CreateAddressOption($addressId));
	}


	/**
	 * @param int $addressId The ID of the address
	 */
	public function deleteAddressOptionByAddressId(int $addressId): Response
	{
		return $this->connector->send(new DeleteAddressOptionByAddressId($addressId));
	}


	/**
	 * @param int $addressId The ID of the address
	 * @param string $orderIds The ID of the orders
	 */
	public function getAddressDataByAddressId(int $addressId, ?string $orderIds = null): Response
	{
		return $this->connector->send(new GetAddressDataByAddressId($addressId, $orderIds));
	}


	public function deleteBatchOfCompanies(): Response
	{
		return $this->connector->send(new DeleteBatchOfCompanies());
	}


	/**
	 * @param int $accountId The ID of the company. An account is equivalent to a company.
	 * @param int $contactId The ID of the contact.
	 */
	public function createCompanyContactRelation(int $accountId, int $contactId): Response
	{
		return $this->connector->send(new CreateCompanyContactRelation($accountId, $contactId));
	}


	/**
	 * @param int $accountContactRelationId The ID of the company contact relation
	 */
	public function getCompanyContactRelation(int $accountContactRelationId): Response
	{
		return $this->connector->send(new GetCompanyContactRelation($accountContactRelationId));
	}


	/**
	 * @param int $accountContactRelationId The ID of the company contact relation
	 */
	public function deleteCompanyContactRelation(int $accountContactRelationId): Response
	{
		return $this->connector->send(new DeleteCompanyContactRelation($accountContactRelationId));
	}


	/**
	 * @param int $accountContactRelationId The ID of the company contact relation
	 * @param bool $isPrimary Sets one contact per account as the primary contact.
	 */
	public function updatesAccountContactRelationIsPrimaryField(int $accountContactRelationId, bool $isPrimary): Response
	{
		return $this->connector->send(new UpdatesAccountContactRelationIsPrimaryField($accountContactRelationId, $isPrimary));
	}


	/**
	 * @param string $fullText Filter for a fulltext search
	 * @param string $contactEmail Filter that restricts
	 *      * the search result to contacts resembling to the given email address
	 * @param string $email Filter that restricts the
	 *      * search result to contacts with a specific email address
	 * @param string $postalCode Filter that restricts the
	 *      * search result to contacts with a specific postcode
	 * @param int $plentyId Filter that restricts the
	 *      * search result to contacts with a specific plentyId
	 * @param int $externalId Filter that restricts the
	 *      * search result to contacts with a specific externalId
	 * @param int $number Filter that restricts the
	 *      * search result to contacts with a specific number
	 * @param int $typeId Filter that restricts the
	 *      * search result to contacts with a specific contact type
	 * @param int $rating Filter that restricts the
	 *      * search result to contacts with a specific rating
	 * @param string $createdAtBefore Filter that restricts the
	 *      * search result to contacts that were created before a specific date.
	 *      * Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $createdAtAfter Filter that restricts the
	 *      * search result to contacts that were created after a specific date.
	 *      * Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $updatedAtBefore Filter that restricts the
	 *      * search result to contacts that were updated before a specific date.
	 *      * Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $updatedAtAfter Filter that restricts the
	 *      * search result to contacts that were updated after a specific date.
	 *      * Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $lastOrderAtBefore Filter that restricts the
	 *      * search result to contacts whose last order was created before a specific date.
	 *      * Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $lastOrderAtAfter Filter that restricts the
	 *      * search result to contacts whose last order was created after a specific date.
	 *      * Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $with Includes the specified contact information in the
	 *      * results. The following parameters are available: addresses, accounts,
	 *      * options, orderSummary, primaryBillingAddress,
	 *      * contactOrders. More than one parameter should be separated by commas.
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 * @param string $newsletterAllowanceAfter Filter that restricts the
	 *      * search result to contacts who registered for the newsletter after a specific date.
	 *      * Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $newsletterAllowanceBefore Filter that restricts the
	 *      * search result to contacts who registered for the newsletter before a specific date.
	 *      * Possible formats: yyyy-mm-dd, mm/dd/yyyy.
	 * @param string $newsletterAllowance Filter that restricts the
	 *      * search result to contacts who registered for the newsletter. Possible values: 'true' and 'false'.
	 *      * True: newsletter registration was successful. False: newsletter registration was not successful.
	 * @param int $contactId Filter that restricts the
	 *      * search result to a specific contact
	 * @param string $contactAddress Filter that restricts the
	 *      * search result to contacts with a specific address
	 * @param string $countryId Filter that restricts the
	 *      * search result to contacts with a specific country
	 * @param string $userId Filter that restricts the
	 *      * search result to contacts with a specific user
	 * @param string $referrerId Filter that restricts the
	 *      * search result to contacts with a specific referrer
	 * @param string $name Filter that restricts the
	 *      * search result to contacts with a specific name
	 * @param string $nameOrId Filter that restricts the
	 *      * search result to contacts with a specific name or ID.
	 * @param string $town Filter that restricts the
	 *      * search result to contacts with a specific town
	 * @param string $privatePhone Filter that restricts the
	 *      * search result to contacts with a private phone number
	 * @param string $billingAddressId Filter that restricts the
	 *      * search result to contacts with a billing address with the ID provided
	 * @param string $deliveryAddressId Filter that restricts
	 *      * the search result to contacts with a delivery address with the ID provided
	 * @param array $tagIds Filter restricts the list of
	 *      * results to contacts with the specified tagIds. More than one ID should be separated by commas.
	 */
	public function listContacts(
		?string $fullText = null,
		?string $contactEmail = null,
		?string $email = null,
		?string $postalCode = null,
		?int $plentyId = null,
		?int $externalId = null,
		?int $number = null,
		?int $typeId = null,
		?int $rating = null,
		?string $createdAtBefore = null,
		?string $createdAtAfter = null,
		?string $updatedAtBefore = null,
		?string $updatedAtAfter = null,
		?string $lastOrderAtBefore = null,
		?string $lastOrderAtAfter = null,
		?string $with = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $newsletterAllowanceAfter = null,
		?string $newsletterAllowanceBefore = null,
		?string $newsletterAllowance = null,
		?int $contactId = null,
		?string $contactAddress = null,
		?string $countryId = null,
		?string $userId = null,
		?string $referrerId = null,
		?string $name = null,
		?string $nameOrId = null,
		?string $town = null,
		?string $privatePhone = null,
		?string $billingAddressId = null,
		?string $deliveryAddressId = null,
		?array $tagIds = null,
	): Response
	{
		return $this->connector->send(new ListContacts($fullText, $contactEmail, $email, $postalCode, $plentyId, $externalId, $number, $typeId, $rating, $createdAtBefore, $createdAtAfter, $updatedAtBefore, $updatedAtAfter, $lastOrderAtBefore, $lastOrderAtAfter, $with, $page, $itemsPerPage, $newsletterAllowanceAfter, $newsletterAllowanceBefore, $newsletterAllowance, $contactId, $contactAddress, $countryId, $userId, $referrerId, $name, $nameOrId, $town, $privatePhone, $billingAddressId, $deliveryAddressId, $tagIds));
	}


	public function createContact(): Response
	{
		return $this->connector->send(new CreateContact());
	}


	public function createBankAccount(): Response
	{
		return $this->connector->send(new CreateBankAccount());
	}


	/**
	 * @param int $contactBankId The ID of the bank account
	 */
	public function getBankAccount(int $contactBankId): Response
	{
		return $this->connector->send(new GetBankAccount($contactBankId));
	}


	/**
	 * @param int $contactBankId The ID of the bank account
	 */
	public function updateBankAccount(int $contactBankId): Response
	{
		return $this->connector->send(new UpdateBankAccount($contactBankId));
	}


	/**
	 * @param int $contactBankId The ID of the bank account
	 */
	public function deleteBankAccount(int $contactBankId): Response
	{
		return $this->connector->send(new DeleteBankAccount($contactBankId));
	}


	/**
	 * @param array $tagRelationships When this parameter is used, the current relations between contacts and tags
	 *      *     will be deleted and replaced by the given ones. If the parameter is not used, the current relations remain.
	 */
	public function batchUpdate(?array $tagRelationships = null): Response
	{
		return $this->connector->send(new BatchUpdate($tagRelationships));
	}


	public function listContactClasses(): Response
	{
		return $this->connector->send(new ListContactClasses());
	}


	public function createsContactClass(): Response
	{
		return $this->connector->send(new CreatesContactClass());
	}


	public function listContactClassesPaginated(): Response
	{
		return $this->connector->send(new ListContactClassesPaginated());
	}


	/**
	 * @param int $contactClassId
	 */
	public function returnsContactClassModelBasedOnId(int $contactClassId): Response
	{
		return $this->connector->send(new ReturnsContactClassModelBasedOnId($contactClassId));
	}


	/**
	 * @param int $contactClassId
	 */
	public function updatesContactClass(int $contactClassId): Response
	{
		return $this->connector->send(new UpdatesContactClass($contactClassId));
	}


	/**
	 * @param int $contactClassId
	 */
	public function deletesContactClass(int $contactClassId): Response
	{
		return $this->connector->send(new DeletesContactClass($contactClassId));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function listContactClassesDuplicate2(): Response
	{
		return $this->connector->send(new ListContactClasses());
	}


	/**
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 */
	public function listContactEvents(?int $page = null, ?int $itemsPerPage = null): Response
	{
		return $this->connector->send(new ListContactEvents($page, $itemsPerPage));
	}


	/**
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 */
	public function createContactEvent(?int $page = null, ?int $itemsPerPage = null): Response
	{
		return $this->connector->send(new CreateContactEvent($page, $itemsPerPage));
	}


	public function getContactEventTypesAsKeyValueArray(): Response
	{
		return $this->connector->send(new GetContactEventTypesAsKeyValueArray());
	}


	/**
	 * @param int $contactEventId The ID of the contact event
	 */
	public function updateContactEvent(int $contactEventId): Response
	{
		return $this->connector->send(new UpdateContactEvent($contactEventId));
	}


	/**
	 * @param int $contactEventId The ID of the contact event
	 */
	public function deleteContactEvent(int $contactEventId): Response
	{
		return $this->connector->send(new DeleteContactEvent($contactEventId));
	}


	public function listContactDepartments(): Response
	{
		return $this->connector->send(new ListContactDepartments());
	}


	public function createContactDepartment(): Response
	{
		return $this->connector->send(new CreateContactDepartment());
	}


	/**
	 * @param int $departmentId The ID of the department
	 */
	public function getContactDepartment(int $departmentId): Response
	{
		return $this->connector->send(new GetContactDepartment($departmentId));
	}


	/**
	 * @param int $departmentId The ID of the department
	 */
	public function updateContactDepartment(int $departmentId): Response
	{
		return $this->connector->send(new UpdateContactDepartment($departmentId));
	}


	/**
	 * @param int $departmentId The ID of the department
	 */
	public function deleteContactDepartment(int $departmentId): Response
	{
		return $this->connector->send(new DeleteContactDepartment($departmentId));
	}


	public function listAllGroupFunctionRelatedData(): Response
	{
		return $this->connector->send(new ListAllGroupFunctionRelatedData());
	}


	/**
	 * @param array $contactList A list of contact IDs
	 * @param int $emailTemplate An email template ID
	 * @param int $newsletter A newsletter folder ID
	 * @param int $addressLabelTemplate An address label template ID
	 */
	public function applySelectedGroupFunctionOptionsForGivenContactIds(
		?array $contactList = null,
		?int $emailTemplate = null,
		?int $newsletter = null,
		?int $addressLabelTemplate = null,
	): Response
	{
		return $this->connector->send(new ApplySelectedGroupFunctionOptionsForGivenContactIds($contactList, $emailTemplate, $newsletter, $addressLabelTemplate));
	}


	public function listContactOptionSubTypes(): Response
	{
		return $this->connector->send(new ListContactOptionSubTypes());
	}


	public function createContactOptionSubType(): Response
	{
		return $this->connector->send(new CreateContactOptionSubType());
	}


	/**
	 * @param int $optionSubTypeId The ID of the contact option sub-type
	 */
	public function getContactOptionSubType(int $optionSubTypeId): Response
	{
		return $this->connector->send(new GetContactOptionSubType($optionSubTypeId));
	}


	/**
	 * @param int $optionSubTypeId The ID of the contact option sub-type
	 */
	public function updateContactOptionSubType(int $optionSubTypeId): Response
	{
		return $this->connector->send(new UpdateContactOptionSubType($optionSubTypeId));
	}


	/**
	 * @param int $optionSubTypeId The ID of the contact option sub-type
	 */
	public function deleteContactOptionSubType(int $optionSubTypeId): Response
	{
		return $this->connector->send(new DeleteContactOptionSubType($optionSubTypeId));
	}


	/**
	 * @param string $with Lists possible option sub-types for each listed option if the parameter 'subTypes' is set.
	 */
	public function listContactOptionTypes(?string $with = null): Response
	{
		return $this->connector->send(new ListContactOptionTypes($with));
	}


	public function createContactOptionType(): Response
	{
		return $this->connector->send(new CreateContactOptionType());
	}


	/**
	 * @param int $optionTypeId The ID of the contact option type
	 */
	public function getContactOptionType(int $optionTypeId): Response
	{
		return $this->connector->send(new GetContactOptionType($optionTypeId));
	}


	/**
	 * @param int $optionTypeId The ID of the contact option type
	 */
	public function updateContactOptionType(int $optionTypeId): Response
	{
		return $this->connector->send(new UpdateContactOptionType($optionTypeId));
	}


	/**
	 * @param int $optionTypeId The ID of the contact option type
	 */
	public function deleteContactOptionType(int $optionTypeId): Response
	{
		return $this->connector->send(new DeleteContactOptionType($optionTypeId));
	}


	/**
	 * @param int $optionId The ID of the option
	 */
	public function getContactOption(int $optionId): Response
	{
		return $this->connector->send(new GetContactOption($optionId));
	}


	/**
	 * @param int $optionId The ID of the option
	 */
	public function updateContactOption(int $optionId): Response
	{
		return $this->connector->send(new UpdateContactOption($optionId));
	}


	/**
	 * @param int $optionId The ID of the option
	 */
	public function deleteContactOption(int $optionId): Response
	{
		return $this->connector->send(new DeleteContactOption($optionId));
	}


	public function listContactPositions(): Response
	{
		return $this->connector->send(new ListContactPositions());
	}


	public function createContactPosition(): Response
	{
		return $this->connector->send(new CreateContactPosition());
	}


	/**
	 * @param int $positionId The ID of the position
	 */
	public function getContactPosition(int $positionId): Response
	{
		return $this->connector->send(new GetContactPosition($positionId));
	}


	/**
	 * @param int $positionId The ID of the position
	 */
	public function updateContactPosition(int $positionId): Response
	{
		return $this->connector->send(new UpdateContactPosition($positionId));
	}


	/**
	 * @param int $positionId The ID of the position
	 */
	public function deleteContactPosition(int $positionId): Response
	{
		return $this->connector->send(new DeleteContactPosition($positionId));
	}


	public function getSalesRepresentativeOfRegion(): Response
	{
		return $this->connector->send(new GetSalesRepresentativeOfRegion());
	}


	public function listContactTypes(): Response
	{
		return $this->connector->send(new ListContactTypes());
	}


	public function createContactType(): Response
	{
		return $this->connector->send(new CreateContactType());
	}


	/**
	 * @param int $typeId The ID of the contact type
	 */
	public function getContactType(int $typeId): Response
	{
		return $this->connector->send(new GetContactType($typeId));
	}


	/**
	 * @param int $typeId The ID of the contact type
	 */
	public function updateContactType(int $typeId): Response
	{
		return $this->connector->send(new UpdateContactType($typeId));
	}


	/**
	 * @param int $typeId The ID of the contact type
	 */
	public function deleteContactType(int $typeId): Response
	{
		return $this->connector->send(new DeleteContactType($typeId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $with Includes the specified contact information in the results.
	 *      *     The following parameters are available: addresses, accounts.
	 *      *     More than one parameter should be separated by commas.
	 */
	public function getContact(int $contactId, ?string $with = null): Response
	{
		return $this->connector->send(new GetContact($contactId, $with));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param array $tagRelationships When this parameter is used, the current relations between contacts and tags
	 *      *     will be deleted and replaced by the given ones. If the parameter is not used, the current relations remain.
	 */
	public function updateContact(int $contactId, ?array $tagRelationships = null): Response
	{
		return $this->connector->send(new UpdateContact($contactId, $tagRelationships));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param bool $checkExistingOrders Flag that checks if the contact is linked to orders.
	 *      * If the contact is linked to orders, CustomerDeleteException is thrown
	 *      * and the contact will not be deleted.
	 */
	public function deleteContact(int $contactId, ?bool $checkExistingOrders = null): Response
	{
		return $this->connector->send(new DeleteContact($contactId, $checkExistingOrders));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function getLoginUrl(int $contactId): Response
	{
		return $this->connector->send(new GetLoginUrl($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $password The new password
	 */
	public function sendPasswordLinkForContact(int $contactId, string $password): Response
	{
		return $this->connector->send(new SendPasswordLinkForContact($contactId, $password));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $password The new password
	 */
	public function updatePasswordForContact(int $contactId, string $password): Response
	{
		return $this->connector->send(new UpdatePasswordForContact($contactId, $password));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function unblockContact(int $contactId): Response
	{
		return $this->connector->send(new UnblockContact($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function createCompanyForExistingContact(int $contactId): Response
	{
		return $this->connector->send(new CreateCompanyForExistingContact($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $accountId The ID of the company
	 */
	public function getCompanyOfTheContact(int $contactId, int $accountId): Response
	{
		return $this->connector->send(new GetCompanyOfTheContact($contactId, $accountId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $accountId The ID of the account
	 */
	public function updateCompany(int $contactId, int $accountId): Response
	{
		return $this->connector->send(new UpdateCompany($contactId, $accountId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $accountId The ID of the company
	 */
	public function deleteCompanyOfTheContact(int $contactId, int $accountId): Response
	{
		return $this->connector->send(new DeleteCompanyOfTheContact($contactId, $accountId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param bool $isPrimary Sets a contact address per address type as the primary address.
	 * @param int $typeId The type ID of the address. Possible values: <ul><li>Invoice address = 1</li><li> Delivery address = 2</li></ul>
	 */
	public function createAddressForExistingContact(
		int $contactId,
		?bool $isPrimary = null,
		?int $typeId = null,
	): Response
	{
		return $this->connector->send(new CreateAddressForExistingContact($contactId, $isPrimary, $typeId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function getPrimaryOrLastCreatedAddressesOfContact(int $contactId): Response
	{
		return $this->connector->send(new GetPrimaryOrLastCreatedAddressesOfContact($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $addressId The ID of the address
	 * @param bool $isPrimary Sets a contact address per address type as the primary address.
	 * @param int $typeId The type ID of the address. Possible values: <ul><li>Invoice address = 1</li><li> Delivery address = 2</li></ul>
	 */
	public function updateAddressOfTheContact(
		int $contactId,
		int $addressId,
		?bool $isPrimary = null,
		?int $typeId = null,
	): Response
	{
		return $this->connector->send(new UpdateAddressOfTheContact($contactId, $addressId, $isPrimary, $typeId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $addressId The ID of the address
	 * @param int $typeId The type ID of the address. Possible values: <ul><li>Invoice address = 1</li><li> Delivery address = 2</li></ul>
	 */
	public function deleteAddressOfTheContact(int $contactId, int $addressId, ?int $typeId = null): Response
	{
		return $this->connector->send(new DeleteAddressOfTheContact($contactId, $addressId, $typeId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $addressId The ID of the address
	 * @param int $addressTypeId The ID of the address type
	 */
	public function setContactAddressPerAddressTypeAsPrimaryAddress(
		int $contactId,
		int $addressId,
		int $addressTypeId,
	): Response
	{
		return $this->connector->send(new SetContactAddressPerAddressTypeAsPrimaryAddress($contactId, $addressId, $addressTypeId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $addressId The ID of the address
	 * @param int $addressTypeId The ID of the address type
	 */
	public function resetContactPrimaryAddress(int $contactId, int $addressId, int $addressTypeId): Response
	{
		return $this->connector->send(new ResetContactPrimaryAddress($contactId, $addressId, $addressTypeId));
	}


	/**
	 * @param int $contactId
	 * @param int $addressTypeId
	 * @param int $page The requested page. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of addresses to list per page. The default number is 1000.
	 */
	public function listAddressesThatAreLinkedWithContacts(
		int $contactId,
		int $addressTypeId,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new ListAddressesThatAreLinkedWithContacts($contactId, $addressTypeId, $page, $itemsPerPage));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function anonymizeContact(int $contactId): Response
	{
		return $this->connector->send(new AnonymizeContact($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $itemsPerPage The number of items per page
	 */
	public function listBankAccounts(int $contactId, ?int $itemsPerPage = null): Response
	{
		return $this->connector->send(new ListBankAccounts($contactId, $itemsPerPage));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $itemsPerPage The number of items per page
	 */
	public function listBankAccountsPaginated(int $contactId, ?int $itemsPerPage = null): Response
	{
		return $this->connector->send(new ListBankAccountsPaginated($contactId, $itemsPerPage));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 */
	public function listContactEventsByContactId(int $contactId, ?int $page = null, ?int $itemsPerPage = null): Response
	{
		return $this->connector->send(new ListContactEventsByContactId($contactId, $page, $itemsPerPage));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $key The storage key of the object to get from contact documents.
	 */
	public function getStorageObjectFromContactDocuments(int $contactId, string $key): Response
	{
		return $this->connector->send(new GetStorageObjectFromContactDocuments($contactId, $key));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $key The storage key for the file to upload
	 */
	public function uploadDocumentToContactDirectory(int $contactId, string $key): Response
	{
		return $this->connector->send(new UploadDocumentToContactDirectory($contactId, $key));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $contactId
	 * @param string $link The external link
	 * @param string $title An alternative title for the link
	 */
	public function uploadDocumentToContactDirectoryDuplicate3(
		int $contactId,
		string $link,
		?string $title = null,
	): Response
	{
		return $this->connector->send(new UploadDocumentToContactDirectory($contactId, $link, $title));
	}


	/**
	 * @param string $documentId The ID of the document link
	 * @param int $contactId The ID of the contact
	 * @param string $link The external link
	 * @param string $title An alternative title for the link
	 */
	public function updateExistingDocumentLink(
		string $documentId,
		int $contactId,
		string $link,
		?string $title = null,
	): Response
	{
		return $this->connector->send(new UpdateExistingDocumentLink($documentId, $contactId, $link, $title));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $key The storage key to get temporary url for
	 */
	public function getTemporaryUrlForDocument(int $contactId, string $key): Response
	{
		return $this->connector->send(new GetTemporaryUrlForDocument($contactId, $key));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param string $continuationToken token from previous request to continue listing documents
	 */
	public function listDocumentsOfContact(int $contactId, ?string $continuationToken = null): Response
	{
		return $this->connector->send(new ListDocumentsOfContact($contactId, $continuationToken));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param array $keyList List of storage keys to delete
	 */
	public function deleteFilesFromContactDocuments(int $contactId, array $keyList): Response
	{
		return $this->connector->send(new DeleteFilesFromContactDocuments($contactId, $keyList));
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $typeId The ID of the type
	 * @param int $subTypeId The ID of the sub type
	 */
	public function listContactOptions(int $contactId, ?int $typeId = null, ?int $subTypeId = null): Response
	{
		return $this->connector->send(new ListContactOptions($contactId, $typeId, $subTypeId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $contactId The ID of the contact
	 */
	public function updateContactOptionDuplicate4(int $contactId): Response
	{
		return $this->connector->send(new UpdateContactOption($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function createContactOption(int $contactId): Response
	{
		return $this->connector->send(new CreateContactOption($contactId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $contactId The ID of the contact
	 */
	public function deleteContactOptionDuplicate5(int $contactId): Response
	{
		return $this->connector->send(new DeleteContactOption($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function validateContactOptionByGivenValue(int $contactId): Response
	{
		return $this->connector->send(new ValidateContactOptionByGivenValue($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function listContactRelatedData(int $contactId): Response
	{
		return $this->connector->send(new ListContactRelatedData($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function listRegionsByContactId(int $contactId): Response
	{
		return $this->connector->send(new ListRegionsByContactId($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function getVcardFilestreamOfContact(int $contactId): Response
	{
		return $this->connector->send(new GetVcardFilestreamOfContact($contactId));
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function convertGuestAccountIntoRegularAccount(?int $contactId = null): Response
	{
		return $this->connector->send(new ConvertGuestAccountIntoRegularAccount($contactId));
	}


	/**
	 * @param int $page The page number (defaults to 1).
	 * @param int $itemsPerPage The number of results per page (defaults to 50).
	 * @param string $sortBy The sorting column (defaults to createdAt).
	 * @param string $sortOrder The sorting direction (defaults to desc).
	 * @param int $id Filter results by job id.
	 * @param string $name Filter results by job name.
	 * @param array $with Job relations, array or string (comma separated)
	 */
	public function getPaginatedListOfJobsBasedOnProvidedParameters(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?int $id = null,
		?string $name = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new GetPaginatedListOfJobsBasedOnProvidedParameters($page, $itemsPerPage, $sortBy, $sortOrder, $id, $name, $with));
	}


	public function createJobWithGivenData(): Response
	{
		return $this->connector->send(new CreateJobWithGivenData());
	}


	/**
	 * @param int $jobId
	 */
	public function getSingleJobById(int $jobId): Response
	{
		return $this->connector->send(new GetSingleJobById($jobId));
	}


	/**
	 * @param int $jobId
	 */
	public function updateJobNamesWithGivenDataTheIdOfTheJobMustBeSpecified(int $jobId): Response
	{
		return $this->connector->send(new UpdateJobNamesWithGivenDataTheIdOfTheJobMustBeSpecified($jobId));
	}


	/**
	 * @param int $jobId
	 */
	public function deleteJobByGivenId(int $jobId): Response
	{
		return $this->connector->send(new DeleteJobByGivenId($jobId));
	}


	/**
	 * @param int $salesRepresentativeRegionId The ID of the account contact relation
	 */
	public function getRegionById(int $salesRepresentativeRegionId): Response
	{
		return $this->connector->send(new GetRegionById($salesRepresentativeRegionId));
	}


	/**
	 * @param int $salesRepresentativeRegionId The ID of the account contact relation
	 */
	public function updateRegion(int $salesRepresentativeRegionId): Response
	{
		return $this->connector->send(new UpdateRegion($salesRepresentativeRegionId));
	}


	/**
	 * @param int $salesRepresentativeRegionId The ID of the account contact relation
	 */
	public function deleteRegion(int $salesRepresentativeRegionId): Response
	{
		return $this->connector->send(new DeleteRegion($salesRepresentativeRegionId));
	}


	/**
	 * @param int $accountId The ID of the company
	 */
	public function getCompany(int $accountId): Response
	{
		return $this->connector->send(new GetCompany($accountId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $accountId The ID of the company
	 */
	public function updateCompanyDuplicate6(int $accountId): Response
	{
		return $this->connector->send(new UpdateCompany($accountId));
	}


	/**
	 * @param int $accountId The ID of the company
	 */
	public function deleteCompany(int $accountId): Response
	{
		return $this->connector->send(new DeleteCompany($accountId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $accountId The ID of the company
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param string $sortBy Enables the sort of fields. SortBy has as parameter.
	 *      *      The name of the contact field will also be sorted.
	 * @param string $sortOrder Enables to sort the result in an ascending and descending order.
	 *      *      When you want to sort the results in ascending order, use <code>asc</code>.
	 *      *      When you want to sort the result in descending order, use <code>desc</code>.
	 */
	public function listContactsDuplicate7(
		int $accountId,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
	): Response
	{
		return $this->connector->send(new ListContacts($accountId, $page, $itemsPerPage, $sortBy, $sortOrder));
	}


	/**
	 * @param int $accountId The ID of the account
	 * @param int $contactId The ID of the contact
	 */
	public function getRegionByContactIdAndAccountId(int $accountId, int $contactId): Response
	{
		return $this->connector->send(new GetRegionByContactIdAndAccountId($accountId, $contactId));
	}


	/**
	 * @param int $accountId The ID of the company
	 * @param int $contactId The ID of the contact
	 */
	public function createRegionForSalesRepresentative(int $accountId, int $contactId): Response
	{
		return $this->connector->send(new CreateRegionForSalesRepresentative($accountId, $contactId));
	}


	public function createAddressForExistingOrder(): Response
	{
		return $this->connector->send(new CreateAddressForExistingOrder());
	}


	/**
	 * @param int $orderId
	 * @param int $addressId
	 * @param int $relationTypeId
	 */
	public function updateAddressForExistingOrder(int $orderId, int $addressId, int $relationTypeId): Response
	{
		return $this->connector->send(new UpdateAddressForExistingOrder($orderId, $addressId, $relationTypeId));
	}


	/**
	 * @param int $orderId
	 * @param int $relationTypeId
	 */
	public function listOrderAddresses(int $orderId, int $relationTypeId): Response
	{
		return $this->connector->send(new ListOrderAddresses($orderId, $relationTypeId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId
	 * @param int $relationTypeId
	 */
	public function createAddressForExistingOrderDuplicate8(int $orderId, int $relationTypeId): Response
	{
		return $this->connector->send(new CreateAddressForExistingOrder($orderId, $relationTypeId));
	}


	public function createAddressForExistingWarehouse(): Response
	{
		return $this->connector->send(new CreateAddressForExistingWarehouse());
	}


	/**
	 * @param int $warehouseId
	 * @param int $relationTypeId
	 */
	public function listWarehouseAddresses(int $warehouseId, int $relationTypeId): Response
	{
		return $this->connector->send(new ListWarehouseAddresses($warehouseId, $relationTypeId));
	}
}
