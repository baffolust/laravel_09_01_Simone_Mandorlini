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
            <div class="col-12 col-md-6">
                
                <form class="bg-custom-form p-3" action="{{route('receipt.create')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="username" name="user_name">
                    </div>

                    <div class="mb-3">
                        <label for="receiptTitle" class="form-label">Titolo della Ricetta</label>
                        <input type="text" class="form-control" id="receiptTitle" name="receipt_title">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria del Piatto</label>
                        <input type="text" class="form-control" id="category" name="receipt_category">
                    </div>

                    <div class="mb-3">
                        <label for="receiptDescription" class="form-label">Scrivi la tua ricetta qui</label>
                        <textarea name="receipt_description" class="form-control" id="receiptDescription" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-outline-success">Submit</button>
                </form>


            </div>
        </div>
    </div>

</x-layout>
