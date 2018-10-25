<?php

namespace Whois\Domain;

interface WhoisInterface		  
{
	/**
	* 관제 당할 메소드 
	* 넣지 않아도 호출은 된다 
	* 다만 인터페이스를 사용하는 이유를 잊지 말것
	*/	
	public function infoDomain($params);
	public function checkDomain($domain);
	public function addDomain($params);
	public function updateDomain($params);
	public function updateDomainNs($params);
	public function renewCheck($params);
	public function renewDomain($params);
	public function transferDomain($params);
	public function infoHost($params);
	public function manageHost($params);
	public function queryReseller();



}
