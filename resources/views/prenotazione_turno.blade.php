@include('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
              <div class="card-header">Scegli Attività</div>
          <!-- gestione selezione turno -->
            <script type="text/javascript">
            //document.getElementById('submit').hidden=false;
              $(document).ready(function(){
                $("select.select_turno").change(function(){
                    var selected_turno = $(this).children("option:selected").text();
                     });
                  });
                  </script>
                  <!-- lista turni -->
                  <h2>Seleziona turno disponibile </h2>
                  <form action="{{route('conferma')}}" enctype="multipart/form-data" method="post">

                      <select name="data" id="data">
                        <option>{{$selectValue}}</option>
                      </select>
                      <div>

                          <select name="sala" id="sala">
                            <option>{{$selectsala2}}</option>
                          </select>

                      </div>
                      <div>
                          <select class="select_turno" name="select_turno">
                            <?php foreach ($n_fasce as $fascia ): ?>
                              <option>{{$fascia}}</option>
                            <?php endforeach; ?>
                          </select>
                            </div>
                              <div>
                                <select class="select_tipologia" name="select_tipologia">
                                  <?php foreach ($n_tipol as $servizio ): ?>
                                    <option>{{$servizio}}</option>
                                  <?php endforeach; ?>
                                </select>
                                <a>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="prenotazione" button type="button" class="btn btn-secondary">Back</button></a>
                                    <button type="submit" class="btn btn-secondary">Conferma</button>
                                  </a>
                                  </div>
                                </div>
                          </div>
                      </div>

                    <!--  <input type="submit" class="btn btn-success" value="completa prenotazione"  id="submit"> -->

                        {{ Form::token() }}
                    </form>
                  </div>
                </div>
</div>
