<x-layout>

    <div class="container-fluid p-5 bg-dark bg-gradient text-center text-white">
        <div class="row justify-content-center">
            <div class="display-1">
                <h1>The Aulab Post</h1>
            </div>
        </div>
    </div>

    <div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
          </div>
        @endif
    </div>

</x-layout>