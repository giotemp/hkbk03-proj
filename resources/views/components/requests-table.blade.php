<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($roleRequests as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @switch($role)
                    @case('revisor')
                        <a href="{{route('admin.setRevisor',compact('user'))}}" class="btn btn-primary">Attiva ruolo {{$role}}</a>
                        @break

                    @case('writer')
                        <a href="{{route('admin.setWriter',compact('user'))}}" class="btn btn-primary">Attiva ruolo {{$role}}</a>
                        @break
                        
                @endswitch
                

            
            
            </td>
          </tr>
        @endforeach


    </tbody>
  </table>