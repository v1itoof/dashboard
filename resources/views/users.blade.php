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
                <?php if(!empty($users)):?>
                <?php foreach ($users as $user):?>
                <tr id="{{ $user->id }}">
                    <td>{{ $user->id }}</td>
                    <td>{{ Helpers::NomeSobrenome("$user->name") }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                    <td>
                        <div class="dropdown">
                            <a href="" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="lni lni-more-alt btn-option-rotate"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-primary js_editar_user" data-id="{{ $user->id }}"
                                        href="#"><i class="lni lni-pencil-alt"></i> Editar</a></li>
                                <li><a class="dropdown-item text-danger js_excluir_user" href="#"
                                        data-id="{{ $user->id }}"><i class="lni lni-trash-can"></i> Excluir</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>

@endsection

@section('modais')

    <div class="modal fade" id="ModalEditarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label">Email:</label>
                          <input name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Senha:</label>
                          <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
