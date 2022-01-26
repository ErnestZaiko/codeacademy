<?php

namespace Controller;

use Helper\FormHelper;

class User
{
    public function show($id)
    {
        echo 'User controller ID ' . $id;
    }


    public function register()
    {
        $form = new FormHelper('*', 'POST');
        $form->input([
            'Name' => 'name',
            'type' => 'text',
            'placeholder' => 'Vardas'
        ]);
        $form->input([
            'Name' => 'email',
            'type' => 'email',
            'placeholder' => 'Email'
        ]);
        $form->input([
            'Name' => 'password',
            'type' => 'password',
            'placeholder' => '********'
        ]);
        $form->input([
            'Name' => 'password2',
            'type' => 'password',
            'placeholder' => '********'
        ]);
        $form->input([
            'Name' => 'create',
            'type' => 'submit',
            'value' => 'Register'
        ]);

        echo $form->getForm();
    }



    public function login()
    {
        $form = new FormHelper('*', 'POST');
        $form->input([
            'Name' => 'email',
            'type' => 'email',
            'placeholder' => 'Email'
        ]);
        $form->input([
            'Name' => 'password',
            'type' => 'password',
            'placeholder' => '********'
        ]);
        $form->input([
            'Name' => 'login',
            'type' => 'submit',
            'value' => 'Login'
        ]);
        echo $form->getForm();
    }
}
