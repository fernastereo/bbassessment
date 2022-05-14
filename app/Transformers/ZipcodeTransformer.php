<?php

namespace App\Transformers;

use App\Models\Zipcode;
use League\Fractal\TransformerAbstract;

use function PHPUnit\Framework\isEmpty;

class ZipcodeTransformer extends TransformerAbstract
{    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Zipcode $zipcode)
    {
        try {
            $settlements = array ();
            foreach ($zipcode->settlements as $settlement) {
                array_push($settlements, array(
                    'key' => (int)$settlement->key,
                    'name' => (string)strtoupper($settlement->name),
                    'zone_type' => (string)strtoupper($settlement->zone_type),
                    'settlement_type' => array('name' => (string)$settlement->settlementtype->name)
                    )
                );
            }
    
            return [
                'zip_code' => (string)$zipcode->zip_code,
                'locality' => (string)strtoupper($zipcode->locality),
                'federal_entity' => [
                    'key' => (int)$zipcode->municipality->federal_entity->key,
                    'name' => (string)strtoupper($zipcode->municipality->federal_entity->name),
                    'code' => isEmpty($zipcode->municipality->federal_entity->code) ? null : (string)$zipcode->municipality->federal_entity->code 
                ],
                'settlements' => $settlements,
                'municipality' => [
                    'key' => (int)$zipcode->municipality->key,
                    'name' => (string)strtoupper($zipcode->municipality->name),
                ]
            ];
        } catch (\Throwable $th) {
            report($th);

            return ['error' => $th->getMessage()];
        }
    }
}
