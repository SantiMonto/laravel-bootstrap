<div class="container m-5">
    <h1 class="text-center">Bienvenido a la página de cursos</h1>
    <h4 class="text-center">
        A continuación encontraras el listado de cursos, donde podras crear, editar y eliminar
    </h4>
    <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Crear curso
    </button>
    <livewire:courses.create />
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href={{route('courses.show',$course->id)}}>{{ $course->name }}</a>
            </li>
        @endforeach
    </ul>
    {{ $courses->links() }}
</div>
