<x-layout>

    <h1>Dashboard Admin</h1>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
      </div>
    @endif

    <x-requests-table :roleRequests="$revisorRequests" role="revisor"/>
    <x-requests-table :roleRequests="$writerRequests" role="writer"/>
</x-layout>