<x-master>
    <x-slot:title>
       Students List
        </x-slot>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Students</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                </div>
               <a href="{{route('students.create')}}">
               <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="plus"></span>
                    Add New
                </button>
               </a>
            </div>
        </div>

        @if(session('message'))
        <p class="text-success">
            {{ session('message') }}
        </p>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Hobbies</th>
                   
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->dob}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->hobbies}}</td>
                  
                    <td>
                        <a class="btn btn-sm btn-outline-info" href="{{ route('students.show', $student->id) }}">Show</a>
                        | <a class="btn btn-sm btn-outline-warning" href="{{route('students.edit',$student->id)}}">Edit</a>  |

                        <a class="btn btn-sm btn-outline-danger" href="{{ route('students.destroy', $student->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</x-master>
