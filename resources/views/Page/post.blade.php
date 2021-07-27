@extends('layout')
@section('content')
<main id="main" class="main">
   <div id="content" class="blog-wrapper blog-single page-wrapper">
      <div class="row row-divided ">
         <div class="large-8 col">
            @foreach($singlepost as $single)

            <article id="post-6310" class="post-6310 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
               <div class="article-inner ">
                  <header class="entry-header">
                     <div class="entry-header-text entry-header-text-top text-left">
                        <h6 class="entry-category is-xsmall">
                           <a href="{{ route('category', $single->category_id)}}" rel="category tag">{{ $single->category_name }}</a>
                        </h6>
                        <h1 class="entry-title">{{ $single->post_title }}</h1>
                        <div class="entry-divider is-divider small"></div>
                        <div class="entry-meta uppercase is-xsmall">
                        	<img src="{{asset($single->post_image)}}" style="width:100%;height: 400px ;padding-bottom: 10px">
                           <span class="posted-on">Posted on <time class="entry-date published" datetime="2021-07-20T14:35:32+00:00">{{ $single->post_day }}</time></span>	
                        </div>
                     </div>
                  </header>
                  <div class="entry-content single-page">
                  	{{ $single->post_content }}
                     <div class="blog-share text-center">
                        <div class="is-divider medium"></div>
                        <div class="social-icons share-icons share-row relative">
                        	<a href="//www.facebook.com/sharer.php?u={{ $single->post_slug }}" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook tooltipstered" style="padding-top: 7px">
                        		<i class="fa fa-facebook"></i>
                        	</a>
                        	<a href="//twitter.com/share?url={{ $single->post_slug }}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter tooltipstered" style="padding-top: 7px">
                        		<i class="fa fa-twitter"></i>
                        	</a>
                        	<a href="mailto:enteryour@addresshere.com?subject=C%C3%A1n%20b%E1%BB%99%20n%C3%B3i%20%26%238216%3Bb%C3%A1nh%20m%C3%AC%20kh%C3%B4ng%20ph%E1%BA%A3i%20l%C3%A0%20th%E1%BB%B1c%20ph%E1%BA%A9m%26%238217%3B%20l%E1%BA%A1i%20g%C3%A2y%20x%C3%B4n%20xao%20khi%20x%E1%BB%AD%20ph%E1%BA%A1t%20l%C3%B2%20b%C3%A1nh%20m%C3%AC&amp;body=Check%20this%20out:%20{{ $single->post_slug }}" rel="nofollow" class="icon button circle is-outline tooltip email tooltipstered" style="padding-top: 7px">
                        		<i class="fa fa-envelope"></i>
                        	</a>
                        	<a href="//pinterest.com/pin/create/button/?url={{ $single->post_slug }}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest tooltipstered" style="padding-top: 7px">
                        		<i class="fa fa-pinterest"></i>
                        	</a>
                        	<a href="//www.linkedin.com/shareArticle?mini=true&amp;url={{ $single->post_slug }}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin tooltipstered" style="padding-top: 7px">
                        		<i class="fa fa-linkedin"></i>
                        	</a>
                        </div>
                     </div>
                  </div>
               </div>
            </article>
            @endforeach
            <!-- <div id="comments" class="comments-area">
               <div id="respond" class="comment-respond">
                  <h3 id="reply-title" class="comment-reply-title">Trả lời <small><a rel="nofollow" id="cancel-comment-reply-link" href="/can-bo-noi-banh-mi-khong-phai-la-thuc-pham-lai-gay-xon-xao-khi-xu-phat-lo-banh-mi/#respond" style="display:none;">Hủy</a></small></h3>
                  <form action="" method="post" id="commentform" class="comment-form" novalidate="">
                     <p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p>
                     <p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="Bình luận..." aria-required="true"></textarea></p>
                     <p class="comment-form-author"><input id="author" name="author" type="text" placeholder="Họ và Tên*" value="" size="20"></p>
                     <p class="comment-form-email"><input id="email" name="email" type="text" placeholder="Địa chỉ Email*" value="" size="30"></p>
                     <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label></p>
                     <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Phản hồi"> <input type="hidden" name="comment_post_ID" value="6310" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                     </p>
                  </form>
               </div>
            </div> -->
         </div>
         @include('element.sidebar')
      </div>
   </div>
</main>
@endsection