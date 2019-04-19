<?php 
namespace GRDAR\Controllers;

use Drossan\core\Controllers\Controller;
use GRDAR\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        return $this->renderHTML('index.twig', [
            'users' => User::get()
        ]);
    }

    public function indexTest()
    {
        return $this->renderHTML('index.twig', [
            'users' => User::get()
        ]);
    }

    public function newUser()
    {
        return $this->renderHTML('newUser.twig');
    }

    public function addUser($request)
    {
        $responseMessage = null;

        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            try {
                $job = new User();
                $job->email = $postData['email'];
                $job->save();
                $responseMessage = 'Registro insertado';
            } catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }
        }
        return $this->renderHTML('newUser.twig', [
            'responseMessage' => $responseMessage
        ]);
    }

    public function editUser($request)
    {
        $responseMessage = null;

        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            try {
                $user = User::find($postData['id']);
                $user->email = $postData['email'];
                $user->save();
                $responseMessage = 'Registro actualizado';
            } catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }
            $params = ['responseMessage' =>  $responseMessage];
        }else{
            $user = $request->getAttribute('user');
            $params = ['user' => User::find($user)];
        }
        return $this->renderHTML('newUser.twig', $params);
    }

}
