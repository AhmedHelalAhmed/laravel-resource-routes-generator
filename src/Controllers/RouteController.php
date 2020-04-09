<?php

namespace AhmedHelalAhmed\LaravelRoutes\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

/**
 * Class RouteController
 * @package AhmedHelalAhmed\LaravelRoutes\Controllers
 * @author Ahmed Helal Ahmed
 */
class RouteController
{
    public function __invoke(Request $request)
    {
        $output = [];

        if ($request->all()) {
            $output = [
                'resource' => $request->resource_name,
                'modelBind' => '{' . $request->model_name. '}',
                'namespace' => $request->namespace
            ];
        }

        
        return view('pages::index', compact('output'));
    }
}
