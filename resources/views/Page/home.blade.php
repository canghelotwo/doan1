@extends('layout')
@section('content')
<main id="main" class="main">
	<div id="content" class="content-area page-wrapper" role="main">
	   <div class="row row-main">
	      <div class="large-12 col">
	         <div class="col-inner">
	            <div class="row" id="row-197747117">
	               <div id="col-1772652202" class="col blog-home-1 small-12 large-12">
	                  <div class="col-inner">
	                     <div class="row large-columns-3 medium-columns-2 small-columns-1 row-small">
	                        @foreach($all_post as $key => $post)
	                        <div class="col post-item">
	                           <div class="col-inner">
	                              <a href="{{ route('post.index', $post->post_id)}}" class="plain">
	                                 <div class="box box-normal box-text-bottom box-blog-post has-hover">
	                                    <div class="box-image">
	                                       <div class="image-cover" style="padding-top:56.25%;">
	                                          <img width="1272" height="715" src="{{asset($post->post_image)}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy">              
	                                       </div>
	                                    </div>
	                                    <div class="box-text text-left">
	                                       <div class="box-text-inner blog-post-inner">
	                                          <h5 class="post-title is-large ">{{ $post->post_title }}</h5>
	                                          <div class="is-divider"></div>
	                                       </div>
	                                    </div>
	                                 </div>
	                              </a>
	                           </div>
	                        </div>
	                       @endforeach
	                       <div style="text-align: center;">{{ $all_post->links() }}</div>
	                     </div>
	                  </div>
	               </div>
	            </div>
	         </div>

	      </div>
	   </div>
	</div>
</main>
@endsection