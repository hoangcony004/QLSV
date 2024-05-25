<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;


class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException) {
            $statusCode = $exception->getStatusCode();
        } else {
            // Xử lý các loại lỗi khác
            $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR; // Mã trạng thái 500
        }
    
        if ($statusCode == 404) {
            Session::put('previous_url', url()->previous());
            // Xử lý lỗi 404
            return response()->view('apps.errors.404', [], 404);
        } elseif ($statusCode == 500) {
            Session::put('previous_url', url()->previous());
            // Xử lý lỗi 500
            return response()->view('apps.errors.500', [], 500);
        } else {
            Session::put('previous_url', url()->previous());
            // Xử lý các loại lỗi HTTP khác
            return response()->view('apps.errors.general', [], $statusCode);
        }
    }
    
    
}
