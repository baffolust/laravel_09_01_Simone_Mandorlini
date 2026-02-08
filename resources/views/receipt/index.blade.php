<x-layout>

    <header class="container-fluid">
        <div class="row justify-content-center bg-custom-header align-items-center">
            <div class="col-12 text-center">
                <h1> HOMEPAGE </h1>
            </div>
        </div>

    </header>


    <div class="container">
        <div class="row justify-content-center text-light mt-2">
            @foreach ($receipts as $receipt)
                <div class="col-12 col-md-3">

                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{$receipt->title}} </h5>
                            <p class="card-text"> {{$receipt->description}} </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Tipologia: {{$receipt->category}}</li>
                            <li class="list-group-item">Autore: {{$receipt->author}}</li>
                            
                        </ul>
                        
                    </div>



                </div>
            @endforeach
        </div>
    </div>

</x-layout>
