<div class="m-5">
    <h1>
        <?php
        if ($category) {
            echo "Bienvenido al curso: $ourse->name, de la categoría: $category";
        } else {
            echo "Bienvenido al curso: $course->name";
        }
        ?>
    </h1>
    <a href={{ route('courses.home') }}>Volver a cursos</a>
    <p><strong>Categoria: </strong>{{ $course->category }}</p>
    <p><strong>Descripción: </strong>{{ $course->description }}</p>

        <form wire:submit="destroy">
            <button type="button" class="btn btn-primary mb" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Editar curso
            </button>
            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Está seguro que desea elimnar el curso?')">Eliminar curso</button>
        </form>
        <livewire:courses.edit :course="$course" />
</div>
