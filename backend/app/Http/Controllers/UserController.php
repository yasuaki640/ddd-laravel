<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterPost;
use Illuminate\Http\JsonResponse;
use Packages\Application\UseCase\User\GetById\UserGetByIdCommand;
use Packages\Application\UseCase\User\GetById\UserGetByIdServiceInterface;
use Packages\Application\UseCase\User\Register\UserRegisterCommand;
use Packages\Application\UseCase\User\Register\UserRegisterServiceInterface;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * @param UserRegisterServiceInterface $service
     * @param RegisterPost $request
     * @return JsonResponse
     */
    public function register(UserRegisterServiceInterface $service, RegisterPost $request): JsonResponse
    {
        $command = $this->makeRegisterCommand($request);

        $data = $service->handle($command);

        return response()->json($data->toArray());
    }

    /**
     * @param RegisterPost $registerPost
     * @return UserRegisterCommand
     */
    public function makeRegisterCommand(RegisterPost $registerPost): UserRegisterCommand
    {
        return new UserRegisterCommand(
            $registerPost->input('user_name')
        );
    }

    /**
     * @param UserGetByIdServiceInterface $service
     * @param int $id
     * @return JsonResponse
     */
    public function getById(UserGetByIdServiceInterface $service, int $id): JsonResponse
    {
        $command = $this->makeGetByIdCommand($id);

        $data = $service->handle($command);

        return response()->json($data->toArray());
    }

    /**
     * @param int $id
     * @return UserGetByIdCommand
     */
    private function makeGetByIdCommand(int $id): UserGetByIdCommand
    {
        return new UserGetByIdCommand($id);
    }
}
