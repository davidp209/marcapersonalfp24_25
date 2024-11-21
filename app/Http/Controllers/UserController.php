<?php
namespace App\Http\Controllers;

class UserController extends Controller
{
    private $arrayUsers = [
        [
            'email' => 'user0@marcapersonalFP.es',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'password' => 'password0',
            'linkedin' => 'https://www.linkedin.com/in/user0'
        ],
        [
            'email' => 'user1@marcapersonalFP.es',
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'password' => 'password1',
            'linkedin' => 'https://www.linkedin.com/in/user1'
        ],
        [
            'email' => 'user2@marcapersonalFP.es',
            'first_name' => 'Alice',
            'last_name' => 'Johnson',
            'password' => 'password2',
            'linkedin' => 'https://www.linkedin.com/in/user2'
        ],
        [
            'email' => 'user3@marcapersonalFP.es',
            'first_name' => 'Bob',
            'last_name' => 'Williams',
            'password' => 'password3',
            'linkedin' => 'https://www.linkedin.com/in/user3'
        ],
        [
            'email' => 'user4@marcapersonalFP.es',
            'first_name' => 'Eva',
            'last_name' => 'Brown',
            'password' => 'password4',
            'linkedin' => 'https://www.linkedin.com/in/user4'
        ]
    ];

    public function getIndex()
    {
        return view('users.index', ['arrayUsers' => $this->arrayUsers]);
    }

    public function getShow($id)
    {
        if (!isset($this->arrayUsers[$id])) {
            abort(404);
        }

        $user = $this->arrayUsers[$id];
        return view('users.show', ['user' => $user, 'id' => $id]);
    }


    public function getCreate()
    {
        return view('users.create');
    }

    public function getEdit($id)
    {
        if (!isset($this->arrayUsers[$id])) {
            abort(404);
        }

        $user = $this->arrayUsers[$id];
        return view('users.edit', ['user' => $user, 'id' => $id]);
    }
}
