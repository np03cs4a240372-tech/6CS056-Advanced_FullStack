<x-layout title="Student List">
    <h1>Students</h1>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <a class="btn" href="{{ route('students.create') }}">Add New Student</a>

    @if ($students->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->age }}</td>
                        <td>
                            <a href="{{ route('students.show', $student) }}">View</a> |
                            <a href="{{ route('students.edit', $student) }}">Edit</a>

                            <form action="{{ route('students.destroy', $student) }}"
                                  method="POST"
                                  style="display:inline; padding:0; border:0;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                        onclick="return confirm('Delete this student?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No student records available.</p>
    @endif
</x-layout>
