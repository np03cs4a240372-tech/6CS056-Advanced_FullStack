<x-layout title="Create Student">
    <h1>Create Student</h1>

	<form action="{{ route('students.store') }}" method="POST">
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        @csrf()
        <label>Name:</label>
        <input name="name" value="{{ old('name') }}" required maxlength="100" />
        <br />
        <label>Email:</label>
        <input name="email" type="email" value="{{ old('email') }}" required maxlength="256" />
        <br />
        <label>Phone:</label>
        <input name="phone" value="{{ old('phone') }}" maxlength="20" />
        <br />
        <label>Address:</label>
        <textarea name="address">{{ old('address') }}</textarea>
        <br />
        <label>Date of Age:</label>
        <input name="date_of_birth" type="date" value="{{ old('date_of_birth') }}" required />
        <br />
        <button>Submit</button>
    </form>
</x-layout>
