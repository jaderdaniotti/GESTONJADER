<table class="table users-table ">
    <thead>
      <tr>
        <th scope="col">ID 
            <button class="border-0 btn">
                <i class="bi bi-arrow-down-up"></i>
            </button>
        </th>
        <th scope="col">Nome
          
          <button  class="btn border-0">
                <i class="bi bi-arrow-down-up"></i>
            </button>
        </th>
        <th scope="col">Ruolo
            <button class="border-0 btn">
                <i class="bi bi-arrow-down-up"></i>
            </button>
        </th>
        <th scope="col">Modifica</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>
            {{$user->isAdmin ? 'Admin' : 'Utente'}}
          </td>
          <td class>
            <i class="bi bi-gear"></i>
          </td>
        </tr>  
        @endforeach
    </tbody>
</table>
