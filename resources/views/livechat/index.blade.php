@include('layouts.app')
@extends("layout.general")
<div class="background-image">
</div>
@section("contenido")

<div class="container" id="liv">

    @livewire("chat-form")
    @livewire("chat-list")

</div>


@endsection("contenido")