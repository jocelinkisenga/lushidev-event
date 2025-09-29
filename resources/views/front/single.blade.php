@extends("front.front")
@section("content")
         <div id="content-wrapper">
             <div class="container-fluid pb-0">
                 <div class="video-block section-padding">
                     <div class="row">
                         <div class="col-md-8">
                             <div class="single-video-left">
                                 <div class="single-video">
                                    <img src="{{ asset("/storage/".$venue->image)  }}" width="100%" height="315" alt="">


                                     {{-- <iframe  src="https://www.youtube-nocookie.com/embed/8LWZSGNjuF0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
                                 </div>
                                 <div class="single-video-title box mb-3">
                                     <h1><a href="#">{{ $venue->name }}</a></h1>
                                 </div>
                                 <div class="single-video-author box mb-3">
                                     <div class="float-right"><button class="btn btn-danger" type="button">Reserver <strong></strong></button></div>

                                     <p><a href="#"><strong></strong></a> <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"></span></p>

                                 </div>
                                 <div class="single-video-info-content box mb-3">
                                     <h6>A propos de la salle :</h6>
                                     <p>{{ $venue->description }}</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="single-video-right">
                                @livewire("comment.comment",["venueId" => $venue->id])
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- /.container-fluid -->
             <!-- Sticky Footer -->

         </div>
         <!-- /.content-wrapper -->
         </div>

@endsection
