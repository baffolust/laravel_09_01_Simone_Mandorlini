<x-layout>

    <header class="container-fluid">
        <div class="row justify-content-center bg-custom-header align-items-center">
            <div class="col-12 text-center">
                <h1> INSERISCI LA TUA RICETTA QUI </h1>
            </div>
        </div>

    </header>

    @if (session('creation_success'))
        <div class="alert alert-success">
            {{ session('creation_success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center text-light mt-2">
            <div class="col-12 col-md-6">

                <form class="bg-custom-form p-3" action="{{ route('receipt.store') }}" enctype="multipart/form-data"
                    method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Autore della Ricetta</label>
                        <input type="text" class="form-control" id="username" value="{{old('user_name')}}" name="user_name">
                    </div>

                    <div class="mb-3">
                        <label for="receiptTitle" class="form-label">Titolo della Ricetta</label>
                        <input type="text" class="form-control" id="receiptTitle" value="{{old('receipt_title')}}" name="receipt_title">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria del Piatto</label>
                        <input type="text" class="form-control" id="category" value="{{old('receipt_category')}}" name="receipt_category">
                    </div>

                    <div class="mb-3">
                        <label for="receiptDescription" class="form-label">Scrivi la tua ricetta qui</label>
                        <textarea name="receipt_description" class="form-control" id="receiptDescription" cols="30" rows="10">{{old('receipt_description')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="receiptImg" class="form-label">Foto del piatto</label>
                        <input class="form-control form-control-sm" name="receipt_img" id="receiptImg" type="file">
                    </div>

                    <button type="submit" class="btn btn-outline-success">Submit</button>
                </form>


            </div>
        </div>
    </div>

</x-layout>
