@extends("template.home")
@section("title", "OS | Clientes")
@section("body")
    <h1>CLIENTES</h1>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('customers.register') }}" class="btn btn-primary mb-3">Novo</a>
    </div>

    <table class="table table-dark table-hover table-bordered table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Apelido</th>
                <th scope="col">CPF</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data de Aniversário</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($customers as $customer)
                <tr>
                    <th>{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->nickname }}</td>
                    <td>{{ $customer->cpf }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ date("d/m/Y", strtotime($customer->birthday)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection