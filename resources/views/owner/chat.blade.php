@extends("front.front")
@section("content")
<section class="container">

@livewire("chat", ["venueId" => $venueId])
</section>
@endsection
