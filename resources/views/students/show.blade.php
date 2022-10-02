<x-master>
    <x-slot:title>
       Student Details
    </x-slot:title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Student Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
            </div>
            <a href="{{ route('students.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <h1>Name: {{ $student->name }}</h1>
    <p>DOB:{{$student->dob}}</p>
    <p>Gender:{{$student->gender}}</p>
    <p>Hobbies:{{$student->hobbies}}</p>
    <p>Nationality:{{$student->nationality}}</p>

</x-master>