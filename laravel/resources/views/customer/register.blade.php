@extends("template.home")
@section("title", "OS | Cadastrar")
@section("body")
    <h1>CADASTRAR NOVO CLIENTE</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-2">
            <label for="nickname" class="form-label">Apelido:</label>
            <input type="text" class="form-control" id="nickname" name="nickname">
        </div>
        <div class="mb-2">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-2">
            <label for="phone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-2">
            <label for="birthday" class="form-label">Data de Aniversário:</label>
            <input type="text" class="form-control" id="birthday" name="birthday">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
    </form>
@endsection