                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="adblock">
                                             <form wire:submit="store()">
                                                 <input type="text" class="form-control" wire:model="comment">
                                                 <button class="btn btn-sm btn-primary mt-4" type="submit"> envoyer </button>
                                             </form>
                                         </div>
                                         <div class="main-title">
                                             <h6>Recent commentaires</h6>
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="video-card video-card-list">
                                             @forelse ($comments as $item)
                                             <div class="video-card-body">
                                                 <div class="btn-group float-right right-action">
                                                     <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                     </a>
                                                     <div class="dropdown-menu dropdown-menu-right">
                                                         <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                         <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                         <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                     </div>
                                                 </div>
                                                 <div class="video-title">
                                                     <a href="#">{{ $item->comment }}</a>
                                                 </div>
                                                 <div class="video-page text-success">
                                                     Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                                 </div>
                                                 <div class="video-view">
                                                     1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                                 </div>
                                             </div>

                                             @empty

                                             @endforelse
                                         </div>
                                     </div>
                                 </div>
