<?php

namespace App\Http\Controllers;

use App\Entities\UserEntity;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserRegisterRequest;

class UserController extends Controller
{
    /**
     * @var $service
     */
    protected $service;

    /**
     * class instance load
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
    	$this->service = $service; 
    }
    
    /**
     * users lists
     * @return user list view page
     */
    public function index()
    {
        $users = $this->service->userList();
        
    	return view('dashboard.pages.users', [
            'users' => $users,
        ]); 
    }

    /**
     * register user view page. 
     * @return view page.
     */
    public function register()
    {
    	return view('dashboard.auth.register'); 
    }

    /**
     * create user
     * @return 
     */
    public function store(UserRegisterRequest $request, UserEntity $entity)
    {
        try {
            # user request inputs.
            $inputs = $request->all();
            # set user data.
            $entity = $entity->setEntityAttributes($inputs);
            # user registe.
            $user = $this->service->createUser($entity);
            # success message.
            $message = trans('messages.user.register');

            # retun to login page
            return redirect()->route('login')->with('success', $message);

        } catch (Exception $e) {
            # return back registe view page.
            return redirect()->route('register')->with('error', $e->getMessage());

        }catch (\Illuminate\Database\QueryException $ex) {
            # error message.
            $message = trans('messages.user.duplicate');
            # return back registe view page.
            return redirect()->route('register')->with('error', $message);
        }
    }
}
