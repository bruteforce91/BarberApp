@include('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Scegli la Prenotazione da cancellare</div>
  <form action="{{route('cancella')}}" enctype="multipart/form-data" method="post">
                <div class="card-body">
                  <select class="cancella_turno" name="cancella_turno">
                    <?php foreach ($prenotazioni_utente as $fascia ): ?>
                      <option>{{$fascia->id}} - {{$fascia->salaPrenot->nome}} -
                              {{$fascia->prenotServizio->nomeServizio}} - {{$fascia->Data_prenot}}
                              - {{$fascia->orario_prenot}}
                              </option>
                    <?php endforeach; ?>
                  </select>
                    <button type="submit" class="btn btn-primary btn-lg">Cancella</button>
                    {{ Form::token() }}
                </form>
                </div>

            </div>
            <a href="prenotazione" button type="button" class="btn btn-primary btn-lg">Prenota turno</button></a>

            <a href="record"button type="button" class="btn btn-primary btn-lg">Visualizza Prenotazioni</button></a>
        </div>

    </div>
</div>
