<?php

namespace App\Http\Controllers\User;

use App\Enums\HttpStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\User\UserServiceContract;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class CreateUserController extends Controller
{
    public function __construct(private UserServiceContract $userService)
    {
    }

    public function __invoke(UserRequest $request): JsonResponse
    {
        try {
            $user = $this->userService
                ->userCreate($request->toArray());

            return response()->json([
                'success' => true,
                'data' => $user,
                'message' => __('messages.user.created_successfully'),
            ], HttpStatus::HTTP_CREATED->value);

        } catch (Exception $exception) {
            Log::error('Error to create user: ' . $exception->getMessage(), [
                'trace' => $exception->getTraceAsString(),
            ]);

            return response()->json([
                'success' => false,
                'message' => _('messages.user.creation_failed'),
            ], HttpStatus::HTTP_INTERNAL_SERVER_ERROR->value);
        }
    }
}
