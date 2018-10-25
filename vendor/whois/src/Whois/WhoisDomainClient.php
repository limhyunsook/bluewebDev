<?php
namespace Whois;

 use Whois\Domain\WhoisHandler;
 use Whois\Domain\WhoisInterface;

class WhoisDomainClient
{
	protected $whoisHandler;
	
	public function __construct(array $config = [])
	{ 		
		$this->setWhoisHandler(new WhoisHandler($config));
	}
		
	function getWhoisHeandler()
	{		
		return $this->whoisHandler;
	}

	private	function setWhoisHandler(WhoisInterface $whoisHandler)
	{
		$this->whoisHandler = $whoisHandler;
	}	
}