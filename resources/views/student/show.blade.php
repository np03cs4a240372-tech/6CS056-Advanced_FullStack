
<x-layout title="Student Details">
    <h1>Student Details</h1>

    <p><strong>ID:</strong> {{ $student->id }}</p>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Phone:</strong> {{ $student->phone ?? 'Not provided' }}</p>
    <p><strong>Address:</strong> {{ $student->address ?? 'Not provided' }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->date_of_birth->format('Y-m-d') }}</p>
    <p><strong>Age:</strong> {{ $student->age }}</p>

    <a href="{{ route('students.index') }}">Back to Students</a>

    <a href="{{ route('students.edit', $student) }}">Edit Student</a>
</x-layout>
