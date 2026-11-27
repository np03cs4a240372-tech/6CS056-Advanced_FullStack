<x-layout title="Create Course">
    <h1>Add New Course</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <label>Course Name</label>
        <input name="name" value="{{ old('name') }}" required>

        <label>Description</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <label>Duration (Weeks)</label>
        <input type="number" name="duration"
               value="{{ old('duration') }}" min="1" required>

        <label>Fee</label>
        <input type="number" name="fee" step="0.01"
               value="{{ old('fee') }}" min="0" required>

        <label>Difficulty</label>
        <select name="difficulty" required>
            <option value="Easy">Easy</option>
            <option value="Medium" selected>Medium</option>
            <option value="Hard">Hard</option>
        </select>

        <label>Status</label>
        <select name="is_active" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>

        <br><br>
        <button class="btn">Save Course</button>
        <a class="btn btn-secondary" href="{{ route('courses.index') }}">Cancel</a>
    </form>
</x-layout>
