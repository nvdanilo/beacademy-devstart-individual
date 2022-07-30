@extends("template.home")
@section("title", "Endereço | Cadastrar")
@section("body")
    <h1>CADASTRAR NOVO ENDEREÇO</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('addresses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label for="address_type" class="form-label">Logradouro:</label>
            <input type="text" class="form-control" id="address_type" name="address_type">
        </div>
        <div class="mb-2">
            <label for="address" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-2">
            <label for="number" class="form-label">Número:</label>
            <input type="number" class="form-control" id="number" name="number">
        </div>
        <div class="mb-2">
            <label for="district" class="form-label">Bairro:</label>
            <input type="text" class="form-control" id="district" name="district">
        </div>
        <div class="mb-2">
            <label for="postal_code" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code">
        </div>
        <div class="mb-2">
            <label for="city" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="mb-2">
            <label for="state" class="form-label">Estado:</label>
            <input type="text" class="form-control" id="state" name="state">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
    </form>
@endsection