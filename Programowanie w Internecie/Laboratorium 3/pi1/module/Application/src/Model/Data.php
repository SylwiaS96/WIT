<?php

namespace Application\Model;

class Data 
{
    public function dzisiaj()
	{
		return date('Y-m-d H:i:s');
	}
	
	public function dniTygodnia()
	{
		return [
			'Poniedzia�ek', 'Wtorek', '�roda', 
			'Czwartek', 'Pi�ek', 'Sobota', 'Niedziela'
		];
	}
}