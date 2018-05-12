		<!-- Blog Section -->
		<section id="blog" class="section">
			<!-- Container Starts -->
			<div class="container">
				<div class="section-header">
					<h2 class="section-title">{{$title}}</h2>
					<hr class="lines">
          <p class="section-subtitle">{{$desc}}</p>

				</div>
				<div class="row">
					@foreach($posts as $post)
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
						<!-- Blog Item Starts -->
						<div class="blog-item-wrapper">
							<div class="blog-item-img">
								<a href="single-post.html">
									<img src="img/blog/img1.jpg" alt="">
								</a>
							</div>
							<div class="blog-item-text">
								<div class="meta-tags">
									<span class="date">
										<i class="lnr  lnr-clock"></i>
										{{$post->created_at->diffForHumans()}}
									</span>
									<span class="comments">
										<a href="#">
											<i class="lnr lnr-bubble"></i>
											24 Comments
										</a>
									</span>
								</div>
								<h3>
									<a href="single-post.html">{{$post->title}}</a>
								</h3>
								<p>
									{{$post->body}}
								</p>
								<a href="{{route('blog.show',[$post['id']])}}" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
							</div>
						</div>
						<!-- Blog Item Wrapper Ends-->
					</div>
					@endforeach

				</div>
			</div>
		</section>
		<!-- blog Section End -->


