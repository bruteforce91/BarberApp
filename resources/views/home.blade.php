@include('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Scegli Attività</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Benvenuto {{ Auth::user()->nome}}!!

                </div>

            </div>
            <a href="prenotazione" button type="button" class="btn btn-primary btn-lg">Prenota turno</button></a>

            <a href="record" button type="button" class="btn btn-primary btn-lg">Visualizza Prenotazioni</button></a>
        </div>

    </div>
</div>
