@inject('frontend', 'App\FrontEnd')

@isset($post)

<div class="col-lg-8 col-md-8 col-sm-12">
               <div class="cinner">
                  <div class="mainhomec">
                     <div class="boxx" id="main-wrapper">
                        <div class="main section" id="main">
                           <div class="widget Blog" data-version="1" id="Blog1">
                              
                               
                              <div class="btbreadc">
                                 <span class="bt-labels">
                                 <a class="bthome" href="{{url('/')}}" rel="tag">
                                 <span id="socicon"><i class="fas fa-home"></i></span>
                                 </a>
                                 <a class="btlabel" href="{{url('/')}}" rel="tag">Accueil</a>
                                 <a class="btlabel" href="/news/{{$categorie->slug}}" rel="tag">{{$categorie->name}}</a>
                                 </span>
                              </div>
                              <div>
                                    
                                 <div class="post hentry uncustomized-post-template">
                                    <h1 class="title-blogs">
                                       {{$post->title}}
                                    </h1>
                                    <div class="btitle">
                                       <div class="imgs-thumb">
                                          <img class="post-thumb" src="{{Voyager::image($post->image)}}" alt="{{$post->title}}" alt="{{$post->title}}">
                                       </div>
                                       <!-- Start social media share -->
                                       <div class="share-btn-container">
                                        
                                              <div class="dates-sociles">
                                                 <span class="post-timestamp">
                                             Publié le :
                                             <meta content="#" itemprop="url">
                                             <abbr class="published" itemprop="datePublished" title='{{strftime("%Y-%m-%dT%H:%M:%S+00:00",strtotime("$post->published_at"))}}'>{{ strftime("%e %h %Y",strtotime("$post->published_at")) }}</abbr>
                                          </span> 
                                              </div>
                                             <div class="icons-sociels">
                                                <div class="sharethis-inline-share-buttons"></div>
                                              </div>
                                       </div>
                                       <!-- End social media share -->
                                    </div>
                                    <div class="post-body entry-content">
                                       <div style="text-align: justify;">
                                          <p>
                                             {!! $post->body !!}
                                          </p>
                                          @if($frontend->convertYoutube($post->video_lien) != null )
                                          <div class="video-container">
                                             {!!$frontend->convertYoutube($post->video_lien)!!}
                                          </div>
                                       @endif
                                       </div>
                                    </div>
                                    <div class="belowbody"></div>
                                    <div class="post-footer-line post-footer-line-2">
                                       <span>Source:</span>
                                       <span class="post-labels">
                                       <a href="{{ $post->source_link }}" rel="tag" target="_blank">{{ $post->source_text }}</a>
                                       </span>
                                    </div>
                                    <div class="post-footer-line post-footer-line-2">
                                       <span>Tag:</span>
                                       
                                           @php
                                           $tags = explode(',',$post->meta_keywords);
                                           @endphp
                                           @foreach($tags as $tag)
                                           <span class="post-labels">
                                                <a href="#" rel="tag"> {{$tag}} </a>
                                            </span>
                                            @endforeach
                                       
                                    </div>
                                 </div>
                              </div>
                              <div class="clear"></div>
                              <div  class="related-posts-container">
                                  <div class="article-smilaire"><h4><span></span></h4></div>
                                  
                                 <div class="row">
                                    @component('components.blog.related_post', [ 'posts' => $related_posts ])
                                    @endcomponent
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End section actualité -->
            </div>

@endisset

@section('all_scripts')
<script type="text/javascript" src="{{ asset('assets/js/socialmedia.js')}}"></script>
@endsection