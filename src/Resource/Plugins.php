<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Plugins\ChecksForVersionConstraint;
use PlentyOne\Api\Requests\Plugins\CreatePlugin;
use PlentyOne\Api\Requests\Plugins\DeletePlugin;
use PlentyOne\Api\Requests\Plugins\GetPlugin;
use PlentyOne\Api\Requests\Plugins\GetReversedRequirements;
use PlentyOne\Api\Requests\Plugins\ListPlugins;
use PlentyOne\Api\Requests\Plugins\ListPluginsForBackendUi;
use PlentyOne\Api\Requests\Plugins\LoadSitemapPatterns;
use PlentyOne\Api\Requests\Plugins\SendMail;
use PlentyOne\Api\Requests\Plugins\UpdatePlugin;
use PlentyOne\Api\Requests\Plugins\UpdateReversedDependencies;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Plugins extends BaseResource
{
	/**
	 * @param int $pluginSetId
	 */
	public function updateReversedDependencies(int $pluginSetId): Response
	{
		return $this->connector->send(new UpdateReversedDependencies($pluginSetId));
	}


	public function listPlugins(): Response
	{
		return $this->connector->send(new ListPlugins());
	}


	public function createPlugin(): Response
	{
		return $this->connector->send(new CreatePlugin());
	}


	public function checksForVersionConstraint(): Response
	{
		return $this->connector->send(new ChecksForVersionConstraint());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function listPluginsDuplicate1(): Response
	{
		return $this->connector->send(new ListPlugins());
	}


	public function loadSitemapPatterns(): Response
	{
		return $this->connector->send(new LoadSitemapPatterns());
	}


	public function listPluginsForBackendUi(): Response
	{
		return $this->connector->send(new ListPluginsForBackendUi());
	}


	/**
	 * @param int $pluginId
	 */
	public function getPlugin(int $pluginId): Response
	{
		return $this->connector->send(new GetPlugin($pluginId));
	}


	/**
	 * @param int $pluginId
	 */
	public function updatePlugin(int $pluginId): Response
	{
		return $this->connector->send(new UpdatePlugin($pluginId));
	}


	/**
	 * @param int $pluginId
	 */
	public function deletePlugin(int $pluginId): Response
	{
		return $this->connector->send(new DeletePlugin($pluginId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $pluginId
	 * @param int $pluginSetId
	 */
	public function deletePluginDuplicate2(int $pluginId, int $pluginSetId): Response
	{
		return $this->connector->send(new DeletePlugin($pluginId, $pluginSetId));
	}


	/**
	 * @param int $pluginName
	 * @param int $pluginSetId
	 */
	public function getReversedRequirements(int $pluginName, int $pluginSetId): Response
	{
		return $this->connector->send(new GetReversedRequirements($pluginName, $pluginSetId));
	}


	public function sendMail(): Response
	{
		return $this->connector->send(new SendMail());
	}
}
