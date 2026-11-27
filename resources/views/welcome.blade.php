<x-layout title="Home">
    <div class="home-box">
        <h1>Welcome to Student Course App</h1>

        <p>
            Manage student information and course details
            easily through this application.
        </p>

        <p>
            Use the navigation menu to manage students
            and courses.
        </p>

        <a class="btn" href="{{ route('students.index') }}">
            View Students
        </a>

        <a class="btn" href="{{ route('courses.index') }}">
            View Courses
        </a>
    </div>
</x-layout>
