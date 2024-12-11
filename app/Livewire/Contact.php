<?php
namespace App\Livewire;

use App\Models\Contact as ContactModel;
use Livewire\Component;

class Contact extends Component
{
    public $full_name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function submitForm()
    {
        // Validate form inputs
        $this->validate();

        // Save the data to the database using the Contact model
        ContactModel::create([
            'full_name' => $this->full_name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        // Flash a success message
        session()->flash('message', 'Thông tin đã được gửi thành công!');

        // Reset form fields after submission
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
