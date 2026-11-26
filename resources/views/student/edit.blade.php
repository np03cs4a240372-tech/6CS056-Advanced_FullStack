<x-layout title="Edit Student">
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        @csrf()
        @method("PUT")
        <label>Name:</label>
        <input name="name" value="{{ old('name', $student->name) }}" required maxlength="100" />
        <br />
        <label>Email:</label>
        <input name="email" type="email" value="{{ old('email', $student->email) }}" required maxlength="256" />
        <br />
        <label>Phone:</label>
        <input name="phone" value="{{ old('phone', $student->phone) }}" maxlength="20" />
        <br />
        <label>Address:</label>
        <textarea name="address">{{ old('address', $student->address) }}</textarea>
        <br />
        <label>Date of Birth:</label>
        <input name="date_of_birth" type="date"
       value="{{ old('date_of_birth', $student->date_of_birth->format('Y-m-d')) }}"
       required />        <br />
        <button>Edit</button>
    </form>
</x-layout>
