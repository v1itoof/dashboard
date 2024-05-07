@extends('master')

@section('conteudo')

<div class="card-table p-3">
    <table id="table-home" class="tabela-usuarios" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>CRIADOEM</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>{{ Helpers::NomeSobrenome("João Victor Bezerra de Oliveira") }}</td>
                <td>teste@gmail.com</td>
                <td>12/02/2024</td>
                <td>
                    <div class="dropdown">
                        <a href="" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-more-alt btn-option-rotate"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item text-primary" href="#"><i class="lni lni-pencil-alt"></i> Editar</a></li>
                          <li><a class="dropdown-item text-danger" href="#"><i class="lni lni-trash-can"></i> Excluir</a></li>
                        </ul>
                      </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
