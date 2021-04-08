@include('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <label>Prenotazione Utente: {{ Auth::user()->nome}}</label>
                <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">CLIENTE</th>
                            <th scope="col">SALA</th>
                            <th scope="col">DATA</th>
                            <th scope="col">ORA</th>
                            <th scope="col">SERVIZIO</th>
                            <th scope="col">PRODOTTO</th>
                            <th scope="col">COSTO</th>
                          </tr>
                        </thead>
                  <?php foreach ($prenotazioni_utente as $type ): ?>
                    <tbody>
                      <tr>
                        <th scope="row">{{$type->id}}</th>
                        <td>{{$type->userPrenot->nome}}</td>
                        <td>{{$type->salaPrenot->nome}}</td>
                        <td>{{$type->Data_prenot}}</td>
                        <td>{{$type->orario_prenot}}</td>
                        <td>{{$type->prenotServizio->nomeServizio}}</td>
                        <td>{{$type->prenotServizio->idProdottoUtilizato}}</td>
                        <td>{{$type->prenotServizio->costoServizio}}</td>
                      </tr>

              <?php endforeach; ?>
            </tbody>
            </table>

                </div>

            </div>
            <a href="prenotazione" button type="button" class="btn btn-primary btn-lg">Prenota turno</button></a>

            <a href= "delete" button type="button" class="btn btn-primary btn-lg">Cancella Turno</button></a>
        </div>

    </div>
</div>
