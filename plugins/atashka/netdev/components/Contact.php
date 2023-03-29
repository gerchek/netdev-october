<?php

namespace Atashka\Netdev\Components;
use Input;
use Atashka\Netdev\Models\Contact as Message;

class Contact extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact',
            'description' => 'Contact'
        ];
    }

    public function onSend()
    {
 
     $Message = new Message();
     
     $data = post();
 
     $rules = [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'
     ];
 
     $validation = \Validator::make($data, $rules);
 
     if ($validation->fails()) {
         throw new \ValidationException($validation);
     }
     else
     {
        $name = $Message->name =Input::get('name');
        $email = $Message->email =Input::get('email');
        $message = $Message->message =Input::get('message');

        $Message->save();

    //  return \Redirect::back();
        return redirect()->back();
     }
  }
}