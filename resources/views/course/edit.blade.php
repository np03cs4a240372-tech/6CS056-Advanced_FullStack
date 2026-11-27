<x-layout title="Edit Course">
    <h1>Edit Course</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Course Name</label>
        <input name="name" value="{{ old('name', $course->name) }}" required>

        <label>Description</label>
        <textarea name="description">{{ old('description', $course->description) }}</textarea>

        <label>Duration (Weeks)</label>
        <input type="number" name="duration"
               value="{{ old('duration', $course->duration) }}" min="1" required>

        <label>Fee</label>
        <input type="number" name="fee" step="0.01"
               value="{{ old('fee', $course->fee) }}" min="0" required>

        <label>Difficulty</label>
        <select name="difficulty" required>
            @foreach (['Easy', 'Medium', 'Hard'] as $level)
                <option value="{{ $level }}"
                    {{ old('difficulty', $course->difficulty) == $level ? 'selected' : '' }}>
                    {{ $level }}
                </option>
            @endforeach
        </select>

        <label>Status</label>
        <select name="is_active" required>
            <option value="1" {{ old('is_active', $course->is_active) == 1 ? 'selected' : '' }}>
                Active
            </option>
            <option value="0" {{ old('is_active', $course->is_active) == 0 ? 'selected' : '' }}>
                Inactive
            </option>
        </select>

        <br><br>
        <button class="btn">Update Course</button>
        <a class="btn btn-secondary" href="{{ route('courses.index') }}">Cancel</a>
    </form>
</x-layout>
