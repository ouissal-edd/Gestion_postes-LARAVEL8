@extends("layouts.master")
@section("content")

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Liste Postes</h6>
    <div class="mt-4">
        <div class="d-flex justify-content-end mb-4">
            <a href="#" class="btn btn-primary">Ajouter un Poste</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">User </th>
                <th scope="col">Nom Complet</th>
                <th scope="col">Sujet</th>
                <th scope="col">Description</th>
                <th> Supp</th>
                <th> Modif</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto</td>
                <td><a href="#" class="btn btn-info">Supprimer</a></td>
                <td><a href="#" class="btn btn-danger">Modifier</a></td>

            </tr>


        </tbody>
    </table>

</div>
@endsection
