<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            ['name' => 'Alex',
                'age' => '22',
                'city' => 'Belgorod'
            ],
            ['name' => 'Irina',
                'age' => '34',
                'city' => 'Moscow'
            ],
            ['name' => 'Timon',
                'age' => '26',
                'city' => 'Tula'
            ]
        ];
        return $persons;
    }

}
