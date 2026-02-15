<div class="card" style="width: 21rem;">
    <img src="{{Storage::url($receipt->img)}}" class="card-img-top receipt-card-img-custom" alt="immagine di {{$receipt->title}} ">
    <div class="card-body">
        <h5 class="card-title"> {{ $receipt->title }} </h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Tipologia: {{ $receipt->category }}</li>
        <li class="list-group-item">Autore: {{ $receipt->author }}</li>
        <li class="list-group-item">
            <p class="card-text"> {{ $receipt->description }} </p>
        </li>


    </ul>

</div>