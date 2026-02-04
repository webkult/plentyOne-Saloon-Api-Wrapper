<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\AddressDesign\CreateNewLayout;
use PlentyOne\Api\Requests\AddressDesign\DeleteLayout;
use PlentyOne\Api\Requests\AddressDesign\GetDefaultLayout;
use PlentyOne\Api\Requests\AddressDesign\GetLayout;
use PlentyOne\Api\Requests\AddressDesign\GetLayoutByCountryId;
use PlentyOne\Api\Requests\AddressDesign\ListAllAvailableFields;
use PlentyOne\Api\Requests\AddressDesign\ListAllLayoutsWithTheirContents;
use PlentyOne\Api\Requests\AddressDesign\ListCountriesUsedInOtherLayouts;
use PlentyOne\Api\Requests\AddressDesign\UpdateLayout;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AddressDesign extends BaseResource
{
	public function listAllLayoutsWithTheirContents(): Response
	{
		return $this->connector->send(new ListAllLayoutsWithTheirContents());
	}


	/**
	 * @param string $layout The layout array
	 */
	public function createNewLayout(string $layout): Response
	{
		return $this->connector->send(new CreateNewLayout($layout));
	}


	/**
	 * @param int $countryId The ID of the country
	 */
	public function getLayoutByCountryId(int $countryId): Response
	{
		return $this->connector->send(new GetLayoutByCountryId($countryId));
	}


	public function getDefaultLayout(): Response
	{
		return $this->connector->send(new GetDefaultLayout());
	}


	/**
	 * @param string $uuid The UUID of the current layout
	 */
	public function listCountriesUsedInOtherLayouts(string $uuid): Response
	{
		return $this->connector->send(new ListCountriesUsedInOtherLayouts($uuid));
	}


	/**
	 * @param string $uuid The UUID of the layout
	 */
	public function getLayout(string $uuid): Response
	{
		return $this->connector->send(new GetLayout($uuid));
	}


	/**
	 * @param string $uuid The UUID of the layout
	 * @param string $layout The layout array
	 */
	public function updateLayout(string $uuid, string $layout): Response
	{
		return $this->connector->send(new UpdateLayout($uuid, $layout));
	}


	/**
	 * @param string $uuid The UUID of the layout
	 */
	public function deleteLayout(string $uuid): Response
	{
		return $this->connector->send(new DeleteLayout($uuid));
	}


	public function listAllAvailableFields(): Response
	{
		return $this->connector->send(new ListAllAvailableFields());
	}
}
