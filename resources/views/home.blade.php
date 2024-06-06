@extends('master')

@section('conteudo')

    <div class="title">
        <h1>Dashboard</h1>
    </div>

    <div class="card-title-table">
        <h1>Usuários</h1>
    </div>
    <div class="card-table p-3">
        <table id="table-home" class="tabela-usuarios" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>CRIADOEM</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($users)):?>
                <?php foreach ($users as $user):?>
                <tr id="{{ $user->id }}">
                    <td>{{ $user->id }}</td>
                    <td>{{ Helpers::NomeSobrenome("$user->name") }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                </tr>
                <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>
@endsection
