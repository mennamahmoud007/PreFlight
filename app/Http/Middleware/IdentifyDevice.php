<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class IdentifyDevice
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $deviceId = $request->header('X-Device-ID');
        if (! $deviceId) {
            return response()->json(
                ['message' => 'Device ID is required'], 400
            );
        }
        if (! Str::isUuid($deviceId)) {
            return response()->json(
                ['message' => 'Invalid Device ID format'], 400
            );
        }
        // I merged the device ID into the request for further processing
        $request->merge([
            'device_id' => $deviceId,
        ]);

        return $next($request);
    }
}
