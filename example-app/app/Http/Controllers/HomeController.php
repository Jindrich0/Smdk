<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'filmOne' => 'Dahmer - Monster: The Jeffrey Dahmer Story',
            'descriptionOne' => 'Story of the Milwaukee Monster told from the perspective of the victims and police incompetence that allowed the Wisconsin native to go on a multiyear killing spree.',
            'filmTwo' => 'Better Call Soul',
            'descriptionTwo' => 'The trials and tribulations of criminal lawyer Jimmy McGill in the years leading up to his fateful run-in with Walter White and Jesse Pinkman.',
            'filmThree' => 'Dont Look Up',
            'descriptionThree' => 'Two low-level astronomers must go on a giant media tour to warn humankind of an approaching comet that will destroy planet Earth.',
            'filmFour' => 'The Gray Man',
            'descriptionFour' => 'When the CIA most skilled operative-whose true identity is known to none-accidentally uncovers dark agency secrets, a psychopathic former colleague puts a bounty on his head, setting off a global manhunt by international assassins.',
        ]);
    }
}
