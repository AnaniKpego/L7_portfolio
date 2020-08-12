<?php

namespace App\Http\Livewire;

use App\Message;
use Livewire\Component;

class Messages extends Component
{
    public $messages;
    public $newName;
    public $newEmail;
    public $newPhone;
    public $newSubject;
    public $newMessage;

    public function mount()
    {
        $initialmessages = Message::latest()->get();
        $this->messages = $initialmessages;
    }

    /**
     * @param $field
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($field)
    {
        $this->validateOnly($field,
            [   'newMessage'=>'required|min:50|max:300',
                'newName'=>'required|min:6|max:30',
                'newEmail'=>'required|email',
                'newPhone'=>'required',
                'newSubject'=>'required|min:10|max:50',
            ]);
    }
    public function addMessage(){
        $this->validate([
           'newName'=>'required|min:6|max:30',
           'newEmail'=>'required|email',
           'newPhone'=>'required',
           'newSubject'=>'required|min:10|max:50',
            'newMessage'=>'required|min:50|max:300',
        ]);

        $createdmessage = Message::create([
            'message' => $this->newMessage,
            'email' => $this->newEmail,
            'phone'=> $this->newPhone,
            'subject'=> $this->newSubject,
            'name' => $this->newName,
        ]);

        $this->messages->prepend($createdmessage);
        $this->newMessage = "";
        $this->newSubject = "";
        $this->newEmail = "";
        $this->newPhone ="";
        $this->newName = "";
        session()->flash('message','Votre message a bien été transmis. Nous vous contacterons d\'ici peu');
    }
    public function render()
    {
        return view('livewire.messages');
    }
}
