<?php
namespace ManinderjeetDevout\Inspire\Controllers;

use Illuminate\Http\Request;
use ManinderjeetDevout\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();
        return view('inspire::index', compact('quote'));

        // return $quote;
    }
}