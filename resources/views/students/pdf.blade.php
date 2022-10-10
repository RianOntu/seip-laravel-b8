<table border="1">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Hobbies</th>
                   
                    
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
                  
                 
                </tr>
                @endforeach
            </tbody>
        </table>