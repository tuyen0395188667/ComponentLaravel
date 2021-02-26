<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    // Tạo biến cố định
    public $title;
    // Tạo biến động
    public $email;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $email)
    {
        $this->title = $title;
        $this->email = $email;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar');
    }

    // Lấy danh sách trong Component
    public function user($user)
    {
        return [
            'Do trong A',
            'Do trong B',
            'Do trong C',
            'Do trong D',
            $user
        ];
    }
}
