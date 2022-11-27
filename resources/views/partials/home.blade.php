<section>
    <a href="/member/create">Create new member</a>
    <div class="container">
        <table class="table my-5">
          <h2 class="my-3">Genders</h2>

            <thead>
                <tr class="table my-5">
                    <th scope="col">ID</th>
                    <th scope="col">Genders</th>
               
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genders as $gender )
                <td>{{ $gender->id }} </td>
                <td>{{ $gender->gender }}</td>
                 
                    <td><form action="gender/{{ $gender->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">DELETE</button>
                        </form></td>
                          </tr>
                        @endforeach
               
                <tr class="align-middle">

                </tr>
            </tbody>
        </table>
        <table class="table my-5">
          <h2 class="my-3">Members</h2>
          <thead>
            <tr>
              <th scope="col">nom</th>
              <th scope="col">age</th>
              <th scope="col">gender</th>
            </tr>
          </thead>
          <tbody>
        @foreach ($members as $member )
        <tr class="align-middle">
          <td>{{ $member->name}}</td>
          <td>{{ $member->age }}</td>
          <td>{{ $member->gender->gender}}</td>
          @endforeach
          </tbody>
        </table>
  </div>

</section>