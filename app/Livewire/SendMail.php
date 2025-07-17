<?php

namespace App\Livewire;

use App\Jobs\SendMailJob;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class SendMail extends Component
{
    public $name = '';
    public $email = '';
    public $content = '';
    public $successMessage = '';

    protected $rules = [
        'name' => 'required|string|min:2',
        'email' => 'required|email',
        'content' => 'required|string|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function sendMail()
    {
        $this->validate();

        $user = (object) [
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->content,
        ];

        SendMailJob::dispatch($user);

        $this->successMessage = "✅ Mail sent to {$this->email}!";
        $this->reset(['name', 'email', 'content']);
    }

    public function render()
    {
        return view('livewire.send-mail');
    }
}
