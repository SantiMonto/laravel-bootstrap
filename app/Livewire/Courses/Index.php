<?php

namespace App\Livewire\Courses;

use App\Models\Course;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $courses = Course::orderBy('id', 'desc')->paginate();
        return view('livewire.courses.index', compact('courses'));
    }
}
