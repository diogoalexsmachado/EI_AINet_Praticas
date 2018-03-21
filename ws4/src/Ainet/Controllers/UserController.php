<?php

namespace Ainet\Controllers; // <=> package do Java

use Ainet\Models\User;

class UserController
{
    public function index()
    {
        $title = 'List users';
        $users = User::all();

        render_view('users.list', compact('title', 'users'));
    }

    public function add()
    {
        $title = 'Add user';
        $user = new User;
        $errors = [];

        if (empty($_POST)) {
            return render_view('users.add', compact('title', 'user', 'errors'));
        }
        $user = $this->userFromInput();
        $errors = $this->validateInput($user);

        if(count($errors)>0)
            return render_view('users.add', compact('title', 'user', 'errors'));

        User::add($user);
    }

    private function userFromInput(){
        $user = new User;

        $user->fullname  = input('fullname');
        $user->email     = input('email');
        $user->user_type = input('user_type');
        $user->password  = input('password');

        return $user;
    }

    private function validateInput($user){
        $errors = [];

        if (!trim($user->fullname))
            $errors['fullname'] = "Full name is required";
        elseif (!preg_match("/^[a-zA-Z ]*$/",$user->fullname)) 
            $errors['fullname'] = "Only letters and white space allowed"; 
        

        if(is_null($user->user_type))
            $errors['user_type'] = "Type is required";
        elseif (0>$user->user_type || $user->user_type>2) 
            $errors['user_type'] = "Type is not valid";
        

        if (!trim($user->email))
            $errors['email'] = "Email is required";
        elseif (!filter_var($user->email, FILTER_VALIDATE_EMAIL))
            $errors['email'] = "Invalid email"; 
        

        if (!trim($user->password))
            $errors['password'] = "Password is required";
        elseif(strlen($user->password)<8)
            $errors['password'] = "Password must have at least 8 characters";
        

        $password_confirmation = input('password_confirmation');
        if (!trim($password_confirmation))
            $errors['password_confirmation'] = "Password confirmation is required";
        elseif($user->password!==$password_confirmation)
            $errors['password'] = "Passwords do not match";
        

        return $errors;
    }

    public function edit(){
        $title = 'Edit user';
        if (empty($_GET)) 
            header('Location: user.php'); //check if GET is not empty and sends the user back to the list
        $user_id = $_GET['id'];
        return render_view('users.edit', compact('title', 'user', 'errors'));
        
    }

    public function delete(){
        
    }
}
