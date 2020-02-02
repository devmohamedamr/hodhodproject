@extends('front.layout')
@section('content')

<div class="sub-banner" style="height: 600px;color: wheat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="detail">
                    {!! $sliders->getTranslatedAttribute('slider_content', $lang) !!}					</div>
            </div>
        </div>
    </div>
    <div>
        <img src="{{asset('front/images/slides/banenr-img5.jpg')}}" width="100%" height="600px">
    </div>
</div>
<div class="wave"></div>
   <!--Start Content-->
	<div class="content">

		<div class="news-posts">
			<div class="container">
				<div class="row">

					<div class="col-md-12">

							<div class="news-detail">
								<img src="images/blog/side-bar/news-img5.jpg" alt="">
								<div class="detail">
                                    {!! $blogdetalis->getTranslatedAttribute('blog_content',$lang) !!}
								</div>
							</div>


							<div class="share-post">
								{{-- <h5>Share this Post!</h5> --}}
								<a class="social-icons" href="#.">
									<img src="images/share-post.jpg" alt="">
								</a>
							</div>


							{{-- <div class="author-post">
								<div class="author-detail">
									<img src="images/author.jpg" alt="">
									<div class="text">
										<span class="name">Steven Masters</span>
										<span class="position">Senior Chef</span>
										<p>Aliquam ullamcorper finibus lorem ut auctor. Aliquam sed aliquet eros. Vivamus maximus dignissim mi et accumsan. Aliquam ullamcorper finibus lorem ut auctor.</p>
									</div>
								</div>
							</div> --}}


							{{-- <div class="comments-sec">
								<h5>4 Comments</h5>

								<div class="all-comments">

							<div class="comment-box">
									<img src="images/comment-img1.jpg" alt="">
									<div class="detail">
										<a href="#.">Reply</a>
										<span class="name">Wahab Apple</span>
										<span class="date">September 30, 2016 at 3:21 pm</span>
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
									</div>

									<div class="clear"></div>
								</div>

								<div class="comment-box">
									<img src="images/comment-img2.jpg" alt="">
									<div class="detail">
										<a href="#.">Reply</a>
										<span class="name">John Smith</span>
										<span class="date">September 30, 2016 at 3:21 pm</span>
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
									</div>

									<div class="clear"></div>
								</div>


								<div class="comment-box">
									<img src="images/comment-img3.jpg" alt="">
									<div class="detail">
										<a href="#.">Reply</a>
										<span class="name">M.Bilal</span>
										<span class="date">September 30, 2016 at 3:21 pm</span>
										<p>Established It is a long fact that a reader will be distracted by the readable content of at its layout. </p>
									</div>

									<div class="clear"></div>
									<div class="comment-box reply-comment">
									<img src="images/comment-img2.jpg" alt="">
									<div class="detail">
										<a href="#.">Reply</a>
										<span class="name">John Smith</span>
										<span class="date">September 30, 2016 at 3:21 pm</span>
										<p>Established fact that a reader will be distracted by the readable content of a page when looking at its layout.  be distracted by the readable content when looking at its layout. </p>
									</div>

									<div class="clear"></div>
								</div>

									<div class="clear"></div>
								</div>

								</div>

							</div>


							<div class="leave-reply">
								<h5>Leave a Reply</h5>

								<div class="form">
									<input name=" " type="text" onblur="if(this.value == '') { this.value='Your full name'}" onfocus="if (this.value == 'Your full name') {this.value=''}" value="Your full name">
									<input name=" " type="text" onblur="if(this.value == '') { this.value='E-mail Address'}" onfocus="if (this.value == 'E-mail Address') {this.value=''}" value="E-mail Address">
									<input name=" " type="text" class="last" onblur="if(this.value == '') { this.value='Subject'}" onfocus="if (this.value == 'Subject') {this.value=''}" value="Subject">
									<textarea name=" " cols="1" rows="1" onblur="if(this.value == '') { this.value='Message'}" onfocus="if (this.value == 'Message') {this.value=''}" value="Message">Message</textarea>
									<input name=" " type="submit" value="submit">
								</div>
							</div> --}}



					</div>

					{{-- <div class="col-md-4"> --}}

						{{-- <div class="recent-posts">
							<h6 class="bar-title">Recent Posts</h6>

							<div class="post-sec">
								<a href="blog-detail.html"><img src="images/blog/side-bar/recent-post1.jpg" alt=""></a>
								<a href="blog-detail.html" class="title">Geometric Landscapes Heartologic</a>
								<span class="date">11 Minutes ago</span>
							</div>

							<div class="post-sec">
								<a href="blog-detail.html"><img src="images/blog/side-bar/recent-post2.jpg" alt=""></a>
								<a href="blog-detail.html" class="title">Geometric Landscapes Heartologic</a>
								<span class="date">2 Days ago</span>
							</div>
							<div class="post-sec">
								<a href="blog-detail.html"><img src="images/blog/side-bar/recent-post3.jpg" alt=""></a>
								<a href="blog-detail.html" class="title">Geometric Landscapes Heartologic</a>
								<span class="date">3 months ago</span>
							</div>

						</div>
						<div class="clear"></div>


						<div class="categories">
							<h6 class="bar-title">Categories</h6>
							<ul>
								<li><a href="#."><i class="icon-chevron-small-right"></i> Facelift</a></li>
								<li><a href="#."><i class="icon-chevron-small-right"></i> Dental</a></li>
								<li><a href="#."><i class="icon-chevron-small-right"></i> Tummy Tuck</a></li>
								<li><a href="#."><i class="icon-chevron-small-right"></i> Colonoscopy</a></li>
								<li><a href="#."><i class="icon-chevron-small-right"></i> Heart Patient</a></li>
								<li><a href="#."><i class="icon-chevron-small-right"></i> Chin Implant</a></li>
							</ul>
						</div>
						<div class="clear"></div>

						<div class="tags">
							<h6 class="bar-title">Tags</h6>
							<div class="all-tags">
								<a href="#.">Benefits</a>
								<a href="#.">Kids Health </a>
								<a href="#.">Body Lift</a>
								<a href="#.">Trunk Liposuction</a>
								<a href="#.">Liposuction</a>
								<a href="#.">ill</a>
								<a href="#.">Cardiac ablation</a>
								<a href="#.">Clean Environment</a>
								<a href="#.">Benefits </a>
								<a href="#.">Kids Health </a>
								<a href="#.">Body Lift</a>
								<a href="#.">Trunk Liposuction</a>
								<a href="#.">Liposuction</a>
								<a href="#.">ill</a>
							</div>
						</div>
						<div class="clear"></div>


						<div class="search">
							<input name=" " type="text" onblur="if(this.value == '') { this.value='Search here'}" onfocus="if (this.value == 'Search here') {this.value=''}" value="Search here">
							<a href="#."><i class="icon-search2"></i></a>
						</div> --}}

					{{-- </div> --}}

				</div>
			</div>
		</div>




   </div>
   <!--End Content-->






   @endsection
