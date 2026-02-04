<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Configuration\ExportsConfigurationFile;
use PlentyOne\Api\Requests\Configuration\GetConfigurationFile;
use PlentyOne\Api\Requests\Configuration\ImportsConfigurationFile;
use PlentyOne\Api\Requests\Configuration\ListConfigurations;
use PlentyOne\Api\Requests\Configuration\SaveConfigurationFile;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Configuration extends BaseResource
{
	/**
	 * @param int $pluginSetId
	 */
	public function exportsConfigurationFile(int $pluginSetId): Response
	{
		return $this->connector->send(new ExportsConfigurationFile($pluginSetId));
	}


	/**
	 * @param int $pluginSetId
	 */
	public function importsConfigurationFile(int $pluginSetId): Response
	{
		return $this->connector->send(new ImportsConfigurationFile($pluginSetId));
	}


	/**
	 * @param int $pluginId
	 * @param int $pluginSetId
	 */
	public function getConfigurationFile(int $pluginId, int $pluginSetId): Response
	{
		return $this->connector->send(new GetConfigurationFile($pluginId, $pluginSetId));
	}


	/**
	 * @param int $pluginId
	 * @param int $pluginSetId
	 */
	public function listConfigurations(int $pluginId, int $pluginSetId): Response
	{
		return $this->connector->send(new ListConfigurations($pluginId, $pluginSetId));
	}


	/**
	 * @param int $pluginId
	 * @param int $pluginSetId
	 */
	public function saveConfigurationFile(int $pluginId, int $pluginSetId): Response
	{
		return $this->connector->send(new SaveConfigurationFile($pluginId, $pluginSetId));
	}
}
