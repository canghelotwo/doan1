@extends('layout')
@section('content')
<main id="main" class="">
	<div id="content" class="content-area page-wrapper" role="main">
	   <div class="row row-main">
	      <div class="large-12 col">
	      	<div class="large-12 text-center col" style="padding-left: 0px;padding-right: 5px">
				<h1 class="page-title is-large uppercase">
					@foreach($category as $cate)
						<span>{{ $cate->category_name }}</span>	
					@endforeach	
				</h1>
			</div>
	        <div class="row row-divided ">
			   <div class="large-8 col">
			      	<div class="row large-columns-1 medium-columns- small-columns-1">
			      	@foreach($all_post_category as $post)
			         	<div class="col post-item">
				            <div class="col-inner">
				               <a href="{{ route('post.index', $post->post_id)}}" class="plain">
				                  <div class="box box-vertical box-text-bottom box-blog-post has-hover">
				                     <div class="box-image" style="width:30%;">
				                        <div class="image-cover" style="padding-top:56%;">
				                           <img width="1272" height="715" src="{{asset($post->post_image)}}" alt="" loading="lazy">  
				                        </div>
				                     </div>
				                     <div class="box-text text-left">
				                        <div class="box-text-inner blog-post-inner">
				                           <h5 class="post-title is-large ">{{ \Illuminate\Support\Str::limit($post->post_title, 20, $end='...') }}</h5>
				                           <div class="is-divider"></div>
				                           <p class="from_the_blog_excerpt ">{{ \Illuminate\Support\Str::limit($post->post_content, 20, $end='...') }}</p>
				                        </div>
				                     </div>
				                  </div>
				               </a>
				            </div>
			         	</div>
			        @endforeach	
			        <div style="text-align: center;">{{ $all_post_category->links() }}</div>
			      	</div>
			   </div>
			   @include('element.sidebar')
			</div>
	      </div>
	   </div>
	</div>
</main>
@endsection