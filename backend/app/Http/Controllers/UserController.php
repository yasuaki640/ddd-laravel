<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterPost;
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
     */
    public function register(UserRegisterServiceInterface $service, RegisterPost $request)
    {
        $command = $this->makeRegisterCommand($request);

        $data = $service->handle($command);

        response()->json($data->toArray());
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

    public function getById(int $id)
    {
        response()->json();
    }
}
