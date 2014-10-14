<?php namespace Larabook\Statuses\Events;

class StatusWasPublished {
	
	public $body;
	public $userId;

	function __construct($body)
	{
		$this->body = $body;
	}
}