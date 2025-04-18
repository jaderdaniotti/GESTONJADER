<x-layout>
    <div class="container-fluid">
        <form action="{{route('login')}}" method="POST" class="mt-3">
            <h3 class="text-center">Entra per accedere al gestionale</h3>
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
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn-register btn fs-5">Accedi</button>
        </form>
    </div>
    </x-layout>