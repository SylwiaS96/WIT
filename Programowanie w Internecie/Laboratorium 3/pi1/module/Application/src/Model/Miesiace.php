<?php

namespace Application\Model;

class Miesiace
{
    
    public function pobierzWszystkie()
    {
        return [ 'blue' => 'Stycze�',
            'yellow' => 'Luty',
            'red' => 'Marzec',
            'orange' => 'Kwiecie�',
            'purple' => 'Maj',
            'magenta' => 'Czerwiec',
            'green' => 'Lipiec',
            'brown' => 'Sierpie�',
            'pink' => 'Wrzesie�',
            'gold' => 'Pa�dziernik',
            'cyan' => 'Listopad',
            'violet' => 'Grudzie�'
        ];
    }
}