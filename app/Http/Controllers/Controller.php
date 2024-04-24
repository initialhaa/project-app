<?php


 
 namespace App\Http\Controllers;
 use OA\Server;
 use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
 use Illuminate\Foundation\Bus\DispatchesJobs;
 use Illuminate\Foundation\Validation\ValidatesRequests;
 use Illuminate\Routing\Controller as BaseController;

/**
 * @SWG\Get(
 *     path="/users",
 *     summary="Get a list of users",
 *     tags={"Users"},
 *     @SWG\Response(response=200, description="Successful operation"),
 *     @SWG\Response(response=400, description="Invalid request")
 * )
 */
 class Controller extends BaseController
 {
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 }
