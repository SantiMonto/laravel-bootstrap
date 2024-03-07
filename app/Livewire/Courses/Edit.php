<?php

namespace App\Livewire\Courses;

use App\Models\Course;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public $course;

    #[Validate('required')] 
    public $name = '';
 
    #[Validate('required')] 
    public $description = '';

    #[Validate('required')] 
    public $category = '';

    public function mount(Course $course){
        $this->course = $course;
        $this->name = $course->name;
        $this->category = $course->category;
        $this->description = $course->description;
    }

    public function store()
    {
        $this->validate(); 

        $this->course-> update($this->only(['name', 'description', 'category']));

        return redirect()->route('courses.show', $this->course->id)->with('status','Curso editado');
    }

    public function render()
    {
        return view('livewire.courses.edit');
    }
}
