<?php

namespace App\Livewire\Courses;

use App\Models\Course;
use Livewire\Component;

class Show extends Component
{
    public $category;
    public $course;

    public function mount(Course $course, $category = null){
        $this->category=$category;
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.courses.show');
    }

    public function destroy(){
        
        $this->course->delete();

        return redirect()->route('courses.home');
    }
}