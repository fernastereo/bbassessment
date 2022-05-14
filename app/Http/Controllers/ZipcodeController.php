<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use App\Http\Controllers\ApiController;

class ZipcodeController extends ApiController
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function show(string $zip_code)
    {
        $zip = Zipcode::where('zip_code', $zip_code)
                ->with(['municipality.federal_entity', 'municipality', 'settlements', 'settlements.settlementtype'])
                ->firstOrFail();

        return $this->showOne($zip);
    }
}
