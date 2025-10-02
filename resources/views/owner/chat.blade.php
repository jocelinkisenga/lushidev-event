@extends("front.front")
@section("content")
<section class="container">

@livewire("chat", ["conversationId" => $conversationId])
</section>
@endsection
