<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\User\FindUserByName;
use PlentyOne\Api\Requests\User\GetAllUsers;
use PlentyOne\Api\Requests\User\GetBackendPluginSet;
use PlentyOne\Api\Requests\User\GetUserById;
use PlentyOne\Api\Requests\User\GetUsersWithPin;
use PlentyOne\Api\Requests\User\SetBackendPluginSet;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class User extends BaseResource
{
	/**
	 * @param int $userId The UserId
	 */
	public function getUserById(int $userId): Response
	{
		return $this->connector->send(new GetUserById($userId));
	}


	public function getAllUsers(): Response
	{
		return $this->connector->send(new GetAllUsers());
	}


	/**
	 * @param string $name The name to search for
	 */
	public function findUserByName(string $name): Response
	{
		return $this->connector->send(new FindUserByName($name));
	}


	public function getBackendPluginSet(): Response
	{
		return $this->connector->send(new GetBackendPluginSet());
	}


	public function setBackendPluginSet(): Response
	{
		return $this->connector->send(new SetBackendPluginSet());
	}


	public function getUsersWithPin(): Response
	{
		return $this->connector->send(new GetUsersWithPin());
	}
}
