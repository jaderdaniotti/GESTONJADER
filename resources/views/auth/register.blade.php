<x-layout>
<div class="container-fluid">
    <form action="{{route('register')}}" method="POST" class="mt-3">
        <h3 class="text-center">REGISTRATI</h3>
        @csrf
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('success'))
        <div class="success">
            {{session('success')}}
        </div>
        @endif
    <div class="mb-2">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
    </div>
    <div class="mb-2">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
    </div>
    <div class="mb-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-2">
        <label for="password_confirmation" class="form-label">Conferma password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn-register btn fs-5">Registrati</button>
    </form>
</div>
</x-layout>