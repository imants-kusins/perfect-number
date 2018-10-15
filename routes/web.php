<?php

use App\Services\NumberClassifier;

$router->group(['prefix' => 'api/v1'], function() use ($router) {
    $router->get('/classify/{type}/{number}', function ($type, $number) use ($router) {

        try {
            if ( ! in_array($type, ['oop', 'func']) ) {
                throw new Exception('The available types are "oop" or "func"');
            }
            
            if ($type === 'oop') {
                $service = new NumberClassifier($number);
                $result = $service->classify();
            } else {
                $result = getClassification($number);
            }

        } catch (Exception $e) {
            
            return response()->json([
                'error' => $e->getMessage()
            ], 422);

        }

        return response()->json([
            'result' => $result
        ]);
        
    });
});