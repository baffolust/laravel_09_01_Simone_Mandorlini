<x-layout>

    <header class="container-fluid">
        <div class="row justify-content-center bg-custom-header align-items-center">
            <div class="col-12 text-center">
                <h1> RECEIPTS LIST </h1>
            </div>
        </div>

    </header>


    <div class="container">
        <div class="row justify-content-evenly text-light mt-2">
            @foreach ($receipts as $receipt)
                <div class="col-12 col-md-4">
                    <x-receipt-card :receipt="$receipt" />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
