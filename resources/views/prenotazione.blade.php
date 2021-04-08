@include('layouts.app')

<!-- gestione selezione sala -->
<script type="text/javascript">
$(document).ready(function(){
   $("select.select_sala").change(function(){
       var selected_sala = $(this).children("option:selected").text();
   });
});
</script>

<!-- gestione selezione turno
<script type="text/javascript">
$(document).ready(function(){
   $("select.select_turno").change(function(){
       var selected_turno = $(this).children("option:selected").text();
        var id_selected_turno = $(this).children("option:selected").index();

       alert("You have selected the country - " + selected_turno);
   });
});
</script>
-->

<div class="container">
<h1>Compila<h1>
  <h2>Seleziona data</h2>
    <form action="{{route('upload')}}" enctype="multipart/form-data" method="post">
  <div class='input-group date' id='date'>
  <input class="date form-control" type="text" id="date-daily" name="name_date" onchange="dataScelta(event);">
  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>

<!-- lista sale -->
  <h2>Seleziona sala</h2>
  <select class="select_sala" id=selezionesala name="selezionesala">
<?php foreach ($n_sale as $nome ): ?>
    <script>
        var nomes={{$nome}};
        </script>
        <option>{{$nome}}</option>

       <?php endforeach; ?>
       </select>
       <div>
      <h3> ricerca i turni disponibili </h3>

             {{csrf_field()}}
             <script type="text/javascript">
             $(document).ready(function(){
                $("select.select_sala").change(function(){
                    var selected_sala = $(this).children("option:selected").text();
                });
             });
             </script>

             <script type="text/javascript">
                   $('#date').datepicker({
                         format: 'yyyy-mm-dd',
                         daysOfWeekDisabled: [0, 1],
                         autoclose: true,
                         });
                         function dataScelta(e) {
                         var data_select=e.target.value;

                         }
                   </script>
             <input type="submit" class="btn btn-success" value="ricerca turni">
             {{ Form::token() }}
           </form>

</div>
  <!-- lista turni
  <h2>Seleziona turno</h2>
  <select class="select_turno">
<?php foreach ($n_fasce as $fascia ): ?>

        <option value="$item->id">{{$fascia}}</option>

       <?php endforeach; ?>
       </select>
</div>
-->


<!-- creazione datePicker e selezione -->



'''
