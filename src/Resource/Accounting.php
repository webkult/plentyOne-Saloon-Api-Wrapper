<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Accounting\CreateAccountingLocation;
use PlentyOne\Api\Requests\Accounting\CreateVatConfiguration;
use PlentyOne\Api\Requests\Accounting\DeleteAccountingLocation;
use PlentyOne\Api\Requests\Accounting\DeletePostingAccount;
use PlentyOne\Api\Requests\Accounting\DeleteVatConfiguration;
use PlentyOne\Api\Requests\Accounting\GetAccountingLocation;
use PlentyOne\Api\Requests\Accounting\GetAccountingLocationSettings;
use PlentyOne\Api\Requests\Accounting\GetAllPostingAccounts;
use PlentyOne\Api\Requests\Accounting\GetAllUniquePostingAccounts;
use PlentyOne\Api\Requests\Accounting\GetDebtorAccountConfigurationOfAccountingLocation;
use PlentyOne\Api\Requests\Accounting\GetPostingAccount;
use PlentyOne\Api\Requests\Accounting\GetPostingAccountsByCountryAndWebstore;
use PlentyOne\Api\Requests\Accounting\GetPostingAccountsByLocationId;
use PlentyOne\Api\Requests\Accounting\GetPostingAccountsByLocationIdAndType;
use PlentyOne\Api\Requests\Accounting\GetPostingKeyConfigurationOfAccountingLocation;
use PlentyOne\Api\Requests\Accounting\GetTheIdOfAccountingLocationOfCountry;
use PlentyOne\Api\Requests\Accounting\GetTheRevenueAccountConfigurationOfAccountingLocation;
use PlentyOne\Api\Requests\Accounting\GetTheRevenueAccountConfigurationOfCountry;
use PlentyOne\Api\Requests\Accounting\GetVatConfigurationById;
use PlentyOne\Api\Requests\Accounting\GetVatConfigurationForCountryInLocation;
use PlentyOne\Api\Requests\Accounting\GetVatConfigurationForTheStandardAccountingLocationOfClient;
use PlentyOne\Api\Requests\Accounting\ListAccountingLocations;
use PlentyOne\Api\Requests\Accounting\ListAccountingLocationsOfClient;
use PlentyOne\Api\Requests\Accounting\ListRevenueAccountConfigurations;
use PlentyOne\Api\Requests\Accounting\ListVatConfigurations;
use PlentyOne\Api\Requests\Accounting\ListVatConfigurationsForOneCountryOfDelivery;
use PlentyOne\Api\Requests\Accounting\ListVatConfigurationsOfAccountingLocation;
use PlentyOne\Api\Requests\Accounting\ListsTheDebtorAccountsByMode;
use PlentyOne\Api\Requests\Accounting\SavePostingAccounts;
use PlentyOne\Api\Requests\Accounting\UpdateAccountingLocation;
use PlentyOne\Api\Requests\Accounting\UpdateAccountingLocationSettings;
use PlentyOne\Api\Requests\Accounting\UpdateDebtorAccountConfigurationOfAccountingLocation;
use PlentyOne\Api\Requests\Accounting\UpdatePostingKeyConfigurationOfAccountingLocation;
use PlentyOne\Api\Requests\Accounting\UpdateTheRevenueAccountConfigurationOfAccountingLocation;
use PlentyOne\Api\Requests\Accounting\UpdateVatConfiguration;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Accounting extends BaseResource
{
	public function createAccountingLocation(): Response
	{
		return $this->connector->send(new CreateAccountingLocation());
	}


	public function getAllUniquePostingAccounts(): Response
	{
		return $this->connector->send(new GetAllUniquePostingAccounts());
	}


	public function getAllPostingAccounts(): Response
	{
		return $this->connector->send(new GetAllPostingAccounts());
	}


	public function savePostingAccounts(): Response
	{
		return $this->connector->send(new SavePostingAccounts());
	}


	/**
	 * @param int $id
	 */
	public function getPostingAccount(int $id): Response
	{
		return $this->connector->send(new GetPostingAccount($id));
	}


	/**
	 * @param int $id The ID of the posting account
	 */
	public function deletePostingAccount(int $id): Response
	{
		return $this->connector->send(new DeletePostingAccount($id));
	}


	/**
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of revenue accounts to be displayed per page. The default number of orders per page is 50.
	 */
	public function listRevenueAccountConfigurations(?int $page = null, ?int $itemsPerPage = null): Response
	{
		return $this->connector->send(new ListRevenueAccountConfigurations($page, $itemsPerPage));
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 */
	public function getAccountingLocation(int $locationId): Response
	{
		return $this->connector->send(new GetAccountingLocation($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 */
	public function updateAccountingLocation(int $locationId): Response
	{
		return $this->connector->send(new UpdateAccountingLocation($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 */
	public function deleteAccountingLocation(int $locationId): Response
	{
		return $this->connector->send(new DeleteAccountingLocation($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 * @param int $countryId The ID of the country.
	 */
	public function getTheRevenueAccountConfigurationOfCountry(int $locationId, int $countryId): Response
	{
		return $this->connector->send(new GetTheRevenueAccountConfigurationOfCountry($locationId, $countryId));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function getDebtorAccountConfigurationOfAccountingLocation(int $locationId): Response
	{
		return $this->connector->send(new GetDebtorAccountConfigurationOfAccountingLocation($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function updateDebtorAccountConfigurationOfAccountingLocation(int $locationId): Response
	{
		return $this->connector->send(new UpdateDebtorAccountConfigurationOfAccountingLocation($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 * @param string $mode The mode defines how pending amounts are assigned to debtor accounts. The following modes are available:
	 *      <ul>
	 *       <li>character        = The debtor accounts are selected based on the first character of customer information. The information and the order of the information that will be used are defined with the sequence. There are 3 different sequences available.</li>
	 *       <li>payment          = The debtor accounts are selected based on the payment method.</li>
	 *       <li>country          = The debtor accounts are selected based on the country of delivery.</li>
	 *       <li>country_payment  = The debtor accounts are selected based on two criteria. The first criteria is the country and if the country is same as the country of the accounting location then the payment method is used to select the deptor account.</li>
	 *      </ul>
	 */
	public function listsTheDebtorAccountsByMode(int $locationId, string $mode): Response
	{
		return $this->connector->send(new ListsTheDebtorAccountsByMode($locationId, $mode));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function getPostingAccountsByLocationId(int $locationId): Response
	{
		return $this->connector->send(new GetPostingAccountsByLocationId($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function getPostingKeyConfigurationOfAccountingLocation(int $locationId): Response
	{
		return $this->connector->send(new GetPostingKeyConfigurationOfAccountingLocation($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function updatePostingKeyConfigurationOfAccountingLocation(int $locationId): Response
	{
		return $this->connector->send(new UpdatePostingKeyConfigurationOfAccountingLocation($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function getTheRevenueAccountConfigurationOfAccountingLocation(int $locationId): Response
	{
		return $this->connector->send(new GetTheRevenueAccountConfigurationOfAccountingLocation($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function updateTheRevenueAccountConfigurationOfAccountingLocation(int $locationId): Response
	{
		return $this->connector->send(new UpdateTheRevenueAccountConfigurationOfAccountingLocation($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 */
	public function getAccountingLocationSettings(int $locationId): Response
	{
		return $this->connector->send(new GetAccountingLocationSettings($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 */
	public function updateAccountingLocationSettings(int $locationId): Response
	{
		return $this->connector->send(new UpdateAccountingLocationSettings($locationId));
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 * @param string $type The type of the PostingAccount.
	 */
	public function getPostingAccountsByLocationIdAndType(int $locationId, string $type): Response
	{
		return $this->connector->send(new GetPostingAccountsByLocationIdAndType($locationId, $type));
	}


	/**
	 * @param int $countryId The ID of the country
	 * @param int $webstoreId
	 * @param int $webstoreId The ID of the webstore
	 */
	public function getPostingAccountsByCountryAndWebstore(int $countryId, int $webstoreId): Response
	{
		return $this->connector->send(new GetPostingAccountsByCountryAndWebstore($countryId, $webstoreId, $webstoreId));
	}


	public function listAccountingLocations(): Response
	{
		return $this->connector->send(new ListAccountingLocations());
	}


	/**
	 * @param int $plentyId
	 */
	public function listAccountingLocationsOfClient(int $plentyId): Response
	{
		return $this->connector->send(new ListAccountingLocationsOfClient($plentyId));
	}


	/**
	 * @param int $plentyId
	 * @param int $countryId The ID of the country of the accounting location. The default accounting location of the client will be returned if the ID of a country is not specified.
	 */
	public function getTheIdOfAccountingLocationOfCountry(int $plentyId, ?int $countryId = null): Response
	{
		return $this->connector->send(new GetTheIdOfAccountingLocationOfCountry($plentyId, $countryId));
	}


	/**
	 * @param int $page The requested page.
	 * @param int $itemsPerPage The number of items per page.
	 * @param array $with The relations to load with the VAT object. The relations available are location or country.
	 * @param array $columns The properties to be loaded.
	 */
	public function listVatConfigurations(
		?int $page = null,
		?int $itemsPerPage = null,
		?array $with = null,
		?array $columns = null,
	): Response
	{
		return $this->connector->send(new ListVatConfigurations($page, $itemsPerPage, $with, $columns));
	}


	public function createVatConfiguration(): Response
	{
		return $this->connector->send(new CreateVatConfiguration());
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 * @param array $with The relations to load with the VAT object. The relations available are location and country.
	 * @param array $columns The attributes of the VAT configuration
	 */
	public function listVatConfigurationsOfAccountingLocation(
		int $locationId,
		?array $with = null,
		?array $columns = null,
	): Response
	{
		return $this->connector->send(new ListVatConfigurationsOfAccountingLocation($locationId, $with, $columns));
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 * @param int $countryId The ID of the country of delivery
	 * @param array $with The relations to load with the VAT object. The relations available are location or country.
	 * @param array $columns The attributes of the VAT configuration
	 */
	public function listVatConfigurationsForOneCountryOfDelivery(
		int $locationId,
		int $countryId,
		?array $with = null,
		?array $columns = null,
	): Response
	{
		return $this->connector->send(new ListVatConfigurationsForOneCountryOfDelivery($locationId, $countryId, $with, $columns));
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 * @param int $countryId The ID of the country of delivery
	 * @param int $date
	 * @param string $startDate The date of validity
	 * @param array $with The relations to load with the VAT object. The relations available are location or country.
	 * @param array $columns The attributes of the VAT configuration
	 */
	public function getVatConfigurationForCountryInLocation(
		int $locationId,
		int $countryId,
		int $date,
		string $startDate,
		?array $with = null,
		?array $columns = null,
	): Response
	{
		return $this->connector->send(new GetVatConfigurationForCountryInLocation($locationId, $countryId, $date, $startDate, $with, $columns));
	}


	/**
	 * @param int $plentyId The plenty ID of the client (store)
	 * @param string $startedAt The date in the W3C format when the vat configuration went into effect
	 */
	public function getVatConfigurationForTheStandardAccountingLocationOfClient(
		?int $plentyId = null,
		?string $startedAt = null,
	): Response
	{
		return $this->connector->send(new GetVatConfigurationForTheStandardAccountingLocationOfClient($plentyId, $startedAt));
	}


	/**
	 * @param int $vatId
	 */
	public function getVatConfigurationById(int $vatId): Response
	{
		return $this->connector->send(new GetVatConfigurationById($vatId));
	}


	/**
	 * @param int $vatId
	 */
	public function updateVatConfiguration(int $vatId): Response
	{
		return $this->connector->send(new UpdateVatConfiguration($vatId));
	}


	/**
	 * @param int $vatId
	 */
	public function deleteVatConfiguration(int $vatId): Response
	{
		return $this->connector->send(new DeleteVatConfiguration($vatId));
	}
}
