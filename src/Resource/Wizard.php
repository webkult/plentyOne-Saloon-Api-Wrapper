<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Wizard\CreateWizardData;
use PlentyOne\Api\Requests\Wizard\CreateWizardDataOption;
use PlentyOne\Api\Requests\Wizard\DeleteWizardData;
use PlentyOne\Api\Requests\Wizard\DeleteWizardDataOption;
use PlentyOne\Api\Requests\Wizard\FinalizeTheWizard;
use PlentyOne\Api\Requests\Wizard\GetNonCachedSets;
use PlentyOne\Api\Requests\Wizard\GetWizard;
use PlentyOne\Api\Requests\Wizard\GetWizardData;
use PlentyOne\Api\Requests\Wizard\GetWizardDataByOptionId;
use PlentyOne\Api\Requests\Wizard\ListWizardFolders;
use PlentyOne\Api\Requests\Wizard\ListWizards;
use PlentyOne\Api\Requests\Wizard\LoadDynamicData;
use PlentyOne\Api\Requests\Wizard\PerformActionOfRegisteredActionHandlerClassOfGivenWizard;
use PlentyOne\Api\Requests\Wizard\RebuildWizardCache;
use PlentyOne\Api\Requests\Wizard\UpdateWizardData;
use PlentyOne\Api\Requests\Wizard\UpdateWizardDataOption;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Wizard extends BaseResource
{
	public function listWizards(): Response
	{
		return $this->connector->send(new ListWizards());
	}


	public function listWizardFolders(): Response
	{
		return $this->connector->send(new ListWizardFolders());
	}


	public function getNonCachedSets(): Response
	{
		return $this->connector->send(new GetNonCachedSets());
	}


	/**
	 * @param int $wizardKey
	 */
	public function getWizard(int $wizardKey): Response
	{
		return $this->connector->send(new GetWizard($wizardKey));
	}


	/**
	 * @param int $wizardKey
	 * @param int $actionKey
	 */
	public function performActionOfRegisteredActionHandlerClassOfGivenWizard(int $wizardKey, int $actionKey): Response
	{
		return $this->connector->send(new PerformActionOfRegisteredActionHandlerClassOfGivenWizard($wizardKey, $actionKey));
	}


	/**
	 * @param int $wizardKey
	 */
	public function getWizardData(int $wizardKey): Response
	{
		return $this->connector->send(new GetWizardData($wizardKey));
	}


	/**
	 * @param int $wizardKey
	 */
	public function updateWizardData(int $wizardKey): Response
	{
		return $this->connector->send(new UpdateWizardData($wizardKey));
	}


	/**
	 * @param int $wizardKey
	 */
	public function createWizardData(int $wizardKey): Response
	{
		return $this->connector->send(new CreateWizardData($wizardKey));
	}


	/**
	 * @param int $wizardKey
	 */
	public function deleteWizardData(int $wizardKey): Response
	{
		return $this->connector->send(new DeleteWizardData($wizardKey));
	}


	/**
	 * @param int $wizardKey
	 * @param int $optionId
	 */
	public function getWizardDataByOptionId(int $wizardKey, int $optionId): Response
	{
		return $this->connector->send(new GetWizardDataByOptionId($wizardKey, $optionId));
	}


	/**
	 * @param int $wizardKey
	 * @param int $optionId
	 */
	public function updateWizardDataOption(int $wizardKey, int $optionId): Response
	{
		return $this->connector->send(new UpdateWizardDataOption($wizardKey, $optionId));
	}


	/**
	 * @param int $wizardKey
	 * @param int $optionId
	 */
	public function createWizardDataOption(int $wizardKey, int $optionId): Response
	{
		return $this->connector->send(new CreateWizardDataOption($wizardKey, $optionId));
	}


	/**
	 * @param int $wizardKey
	 * @param int $optionId
	 */
	public function deleteWizardDataOption(int $wizardKey, int $optionId): Response
	{
		return $this->connector->send(new DeleteWizardDataOption($wizardKey, $optionId));
	}


	/**
	 * @param int $wizardKey
	 * @param int $formfieldKey
	 */
	public function loadDynamicData(int $wizardKey, int $formfieldKey): Response
	{
		return $this->connector->send(new LoadDynamicData($wizardKey, $formfieldKey));
	}


	/**
	 * @param int $wizardKey
	 */
	public function rebuildWizardCache(int $wizardKey): Response
	{
		return $this->connector->send(new RebuildWizardCache($wizardKey));
	}


	/**
	 * @param int $wizardKey
	 * @param int $optionId
	 */
	public function finalizeTheWizard(int $wizardKey, int $optionId): Response
	{
		return $this->connector->send(new FinalizeTheWizard($wizardKey, $optionId));
	}
}
