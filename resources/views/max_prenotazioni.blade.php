@include('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3>Cliente con più prenotazioni</h3>
                <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ID_CLIENTE</th>
                            <th scope="col">CLIENTE</th>
                            <th scope="col">GENERE</th>
                            
                          </tr>
                        </thead>
                  <?php foreach ($prenotazioni_singolo as $type ): ?>
                    <tbody>
                      <tr>
                        <th scope="row">{{$type->id}}</th>
                        <td>{{$type->userPrenot->id}}</td>
                        <td>{{$type->userPrenot->nome}}</td>
                        <td>{{$type->userPrenot->sesso}}</td>
                      </tr>

              <?php endforeach; ?>
            </tbody>
            </table>

                </div>

            </div>
            <a href="admin" button type="button" class="btn btn-primary btn-lg">Back</button></a>
        </div>

    </div>
</div>
