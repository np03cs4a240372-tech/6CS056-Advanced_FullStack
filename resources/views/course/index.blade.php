<x-layout title="Courses">
    <h1>Courses</h1>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <a class="btn" href="{{ route('courses.create') }}">
        Add New Course
    </a>

    @if ($courses->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Duration</th>
                    <th>Fee</th>
                    <th>Difficulty</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->duration }} weeks</td>
                        <td>{{ $course->fee }}</td>
                        <td>{{ $course->difficulty }}</td>
                        <td>{{ $course->is_active ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('courses.show', $course) }}">View</a> |
                            <a href="{{ route('courses.edit', $course) }}">Edit</a>

                            <form action="{{ route('courses.destroy', $course) }}"
                                  method="POST"
                                  style="display:inline; padding:0; border:0;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                        onclick="return confirm('Delete this course?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No course records available.</p>
    @endif
</x-layout>
