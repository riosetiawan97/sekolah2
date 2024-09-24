
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Home</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-200 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="<?php echo site_url('');?>" class="text-dark text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="d-flex flex-column flex-root">							
							<!--begin::How It Works Section-->
							<div class="mb-n10 mb-lg-n20 z-index-0">
								<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(<?php echo base_url().'assets/metronic/media/svg/illustrations/landing.svg'?>)">
									<!--begin::Container-->
									<div class="container" style="margin-top:-50px;padding-bottom:600px;)">
										<!--begin::Product slider-->
										<div id="next" alt="Next" title="Next">
											<div class="arrow-right"></div>
										</div>
										<div id="prev" alt="Prev" title="Prev">				
											<div class="arrow-left"></div>
										</div>			
										<div id="slider">				
											<?php $i=1; foreach ($galeri_slider->result() as $row) : ?>
												<div class="slide">
													<div class="slide-copy">
														<h2 style="color:#fff;"><?php echo $row->galeri_judul;?></h2>
														<p></p>
													</div>
													<div class="img"><img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" class="imgslide"></div>
												</div>
											<?php $i++; endforeach;?>
										</div>
									<!--end::Product slider-->
									</div>
									<!--end::Container-->
								</div>
							</div>
							<!--end::How It Works Section-->
							<!--begin::Curve bottom-->
							<div class="landing-curve landing-dark-color mt-20">
								<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
								</svg>
							</div>
							<!--end::Curve bottom-->

							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::List Widget 5-->
									<div class="card card-xxl-stretch">
										<!--begin::Team Section-->
										<div class="py-10">
											<!--begin::Container-->
											<div class="container">												
												
												<!--begin::Separator-->
												<div class="separator separator-dashed mb-9"></div>
												<!--end::Separator-->
												<!--begin::Row-->
												<div class="row">
													<!--begin::Col-->
													<div class="col-md-6">
														<!--begin::Feature post-->
														<div class="h-100 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10">
															<!--begin::Video-->
															<div class="mb-3">
																<iframe class="embed-responsive-item card-rounded h-275px w-100" src="https://www.youtube.com/embed/qIHXpnASPAA" allowfullscreen="allowfullscreen"></iframe>
															</div>
															<!--end::Video-->
														</div>
														<!--end::Feature post-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 justify-content-between d-flex flex-column">
														<!--begin::Post-->
														<div class="ps-lg-6 mb-16 mt-md-0 mt-17">
															<!--begin::Body-->
															<div class="mb-6">
																<!--begin::Title-->
																<a href="#" class="fw-bolder text-dark mb-4 fs-2 lh-base text-hover-primary">About Us</a>
																<!--end::Title-->
																<!--begin::Text-->
																<div class="fw-bold fs-5 mt-4 text-gray-600 text-dark">We’ve been focused on making the from v4 to v5 a but we’ve also not been afraid to step away been focused on from v4 to v5 speaker approachable making focused</div>
																<!--end::Text-->
															</div>
															<!--end::Body-->
															<!--begin::Footer-->
															<div class="d-flex flex-stack flex-wrap">
																<!--begin::Item-->
																<div class="d-flex align-items-center pe-2">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle me-3">
																		<img src="assets/media/avatars/150-5.jpg" class="" alt="" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Text-->
																	<div class="fs-5 fw-bolder">
																		<a href="../../demo1/dist/pages/profile/overview.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
																		<span class="text-muted">on Apr 27 2021</span>
																	</div>
																	<!--end::Text-->
																</div>
																<!--end::Item-->
																<!--begin::Label-->
																<span class="badge badge-light-info fw-bolder my-2">BLOG</span>
																<!--end::Label-->
															</div>
															<!--end::Footer-->
														</div>
														<!--end::Post-->
													</div>
													<!--end::Col-->
												</div>
												<!--begin::Row-->
												
												<!--begin::Separator-->
												<div class="separator separator-dashed mb-9"></div>
												<!--end::Separator-->
												<!--begin::Row-->
												<div class="row">
													<!--begin::Col-->
													<div class="col-md-6 justify-content-between d-flex flex-column">
														<!--begin::Post-->
														<div class="ps-lg-6 mb-16 mt-md-0 mt-17">
															<!--begin::Body-->
															<div class="mb-6">
																<!--begin::Title-->
																<a href="#" class="fw-bolder text-dark mb-4 fs-2 lh-base text-hover-primary">About Us</a>
																<!--end::Title-->
																<!--begin::Text-->
																<div class="fw-bold fs-5 mt-4 text-gray-600 text-dark">We’ve been focused on making the from v4 to v5 a but we’ve also not been afraid to step away been focused on from v4 to v5 speaker approachable making focused</div>
																<!--end::Text-->
															</div>
															<!--end::Body-->
															<!--begin::Footer-->
															<div class="d-flex flex-stack flex-wrap">
																<!--begin::Item-->
																<div class="d-flex align-items-center pe-2">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle me-3">
																		<img src="assets/media/avatars/150-5.jpg" class="" alt="" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Text-->
																	<div class="fs-5 fw-bolder">
																		<a href="../../demo1/dist/pages/profile/overview.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
																		<span class="text-muted">on Apr 27 2021</span>
																	</div>
																	<!--end::Text-->
																</div>
																<!--end::Item-->
																<!--begin::Label-->
																<span class="badge badge-light-info fw-bolder my-2">BLOG</span>
																<!--end::Label-->
															</div>
															<!--end::Footer-->
														</div>
														<!--end::Post-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6">
														<!--begin::Feature post-->
														<div class="h-100 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10">
															<!--begin::Video-->
															<div class="mb-3">
																<iframe class="embed-responsive-item card-rounded h-275px w-100" src="https://www.youtube.com/embed/qIHXpnASPAA" allowfullscreen="allowfullscreen"></iframe>
															</div>
															<!--end::Video-->
														</div>
														<!--end::Feature post-->
													</div>
													<!--end::Col-->
												</div>
												<!--begin::Row-->
												
												<!--begin::Separator-->
												<div class="separator separator-dashed mb-9"></div>
												<!--end::Separator-->

											</div>
											<!--end::Container-->
										</div>
										<!--end::Team Section-->
									</div>
									<!--end: List Widget 5-->									
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->

							
							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::List Widget 5-->
									<div class="card card-xxl-stretch">
										<!--begin::Team Section-->
										<div class="py-10">
											<!--begin::Container-->
											<div class="container">
												<!--begin::latest instagram-->
												<div class="">
													<!--begin::Section-->
													<div class="m-0">
														<!--begin::Content-->
														<div class="d-flex flex-stack">
															<!--begin::Title-->
															<h3 class="text-black">Latest Gallery Posts</h3>
															<!--end::Title-->
															<!--begin::Link-->
															<a href="<?php echo site_url('galeri');?>" class="fs-6 fw-bold link-primary">View Gallery</a>
															<!--end::Link-->
														</div>
														<!--end::Content-->
														<!--begin::Separator-->
														<div class="separator separator-dashed border-gray-300 mb-9 mt-5"></div>
														<!--end::Separator-->
													</div>
													<!--end::Section-->
													<!--begin::Row-->
													<div class="row g-10 row-cols-2 row-cols-lg-5">
														<?php $i=1; foreach ($album->result() as $row) : ?>
															<!--begin::Col-->
															<div class="col">
																<!--begin::Overlay-->
																<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?php echo base_url().'galeri/album/'.$row->album_id;?>">
																	<!--begin::Image-->
																	<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?php echo base_url().'assets/images/'.$row->album_cover;?>')"></div>
																	<!--end::Image-->
																	<!--begin::Action-->
																	<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																		<i class="bi bi-eye-fill fs-2x text-white"></i>
																	</div>
																	<!--end::Action-->
																</a>
															</div>
															<!--end::Col-->
														<?php $i++; endforeach;?>
													</div>
													<!--begin::Row-->
												</div>
												<!--end::latest instagram-->
											</div>
											<!--end::Container-->
										</div>
										<!--end::Team Section-->
									</div>
									<!--end: List Widget 5-->									
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Statistics Section-->
							<div class="mt-sm-n10">
								<!--begin::Curve top-->
								<div class="landing-curve landing-dark-color" style="z-index: 0;">
									<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
									</svg>
								</div>
								<!--end::Curve top-->
								<!--begin::Wrapper-->
								<div class="pb-15 pt-18 landing-dark-bg">
									<!--begin::Container-->
									<div class="container">
										<!--begin::Row-->
										<div class="row g-5 g-xl-8">
											<div class="col-xl-4">
												<!--begin::List Widget 8-->
												<div class="card card-xl-stretch mb-5 mb-xl-8">
													<!--begin::Header-->
													<div class="card-header align-items-center border-0 mt-4">
														<h3 class="card-title align-items-start flex-column">
															<span class="fw-bolder text-dark">Event</span>
														</h3>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-3">
														<?php $i=1; foreach ($agenda->result() as $row) : ?>
															<!--begin::Item-->
															<div class="d-flex mb-7">
																<!--begin::Symbol-->
																<div class="symbol symbol-60px symbol-2by3 me-4">
																	<div class="symbol-label" style="background-image: url('<?php echo base_url().'assets/images/'.$row->agenda_gambar;?>')"></div>
																</div>
																<!--end::Symbol-->
																<!--begin::Content-->
																<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																	<!--begin::Title-->
																	<div class="flex-grow-1 my-lg-0 my-2 me-2">
																		<a href="<?php echo site_url('agenda/'.$row->agenda_id);?>" class="text-gray-800 fw-bolder text-hover-primary fs-6"><?php echo $row->agenda_nama;?></a>
																		<span class="text-dark fw-bold d-block pt-1"><?=$this->fungsi->limit_words($row->agenda_deskripsi,10).'...';?></span>
																	</div>
																	<!--end::Title-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center">
																		<a href="<?php echo site_url('agenda/'.$row->agenda_id);?>" class="btn btn-icon btn-primary btn-sm border-0">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Item-->
														<?php $i++; endforeach;?>
													</div>
													<!--end::Body-->
												</div>
												<!--end::List Widget 8-->
											</div>
											<div class="col-xl-4">
												<!--begin::List Widget 8-->
												<div class="card card-xl-stretch mb-5 mb-xl-8">
													<!--begin::Header-->
													<div class="card-header align-items-center border-0 mt-4">
														<h3 class="card-title align-items-start flex-column">
															<span class="fw-bolder text-dark">News</span>
														</h3>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-3">
														<?php $i=1; foreach ($berita->result() as $row) : ?>
															<!--begin::Item-->
															<div class="d-flex mb-7">
																<!--begin::Symbol-->
																<div class="symbol symbol-60px symbol-2by3 me-4">
																	<div class="symbol-label" style="background-image: url('<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>')"></div>
																</div>
																<!--end::Symbol-->
																<!--begin::Content-->
																<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																	<!--begin::Title-->
																	<div class="flex-grow-1 my-lg-0 my-2 me-2">
																		<a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="text-gray-800 fw-bolder text-hover-primary fs-6"><?php echo $row->tulisan_judul;?></a>
																		<span class="text-dark fw-bold d-block pt-1"><?=$this->fungsi->limit_words($row->tulisan_isi,10).'...';?></span>
																	</div>
																	<!--end::Title-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center">
																		<a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="btn btn-icon btn-primary btn-sm border-0">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Item-->
														<?php $i++; endforeach;?>
													</div>
													<!--end::Body-->
												</div>
												<!--end::List Widget 8-->
											</div>
											<div class="col-xl-4">
												<!--begin::List Widget 8-->
												<div class="card card-xl-stretch mb-5 mb-xl-8">
													<!--begin::Header-->
													<div class="card-header align-items-center border-0 mt-4">
														<h3 class="card-title align-items-start flex-column">
															<span class="fw-bolder text-dark">FAQ</span>
														</h3>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-3">
														<?php $i=1; foreach ($faq->result() as $row) : ?>
															<!--begin::Item-->
															<div class="d-flex mb-7">
																<!--begin::Symbol-->
																<div class="symbol symbol-60px symbol-2by3 me-4">
																	<div class="symbol-label" style="background-image: url('<?php echo base_url().'assets/images/'.$row->faq_gambar;?>')"></div>
																</div>
																<!--end::Symbol-->
																<!--begin::Content-->
																<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																	<!--begin::Title-->
																	<div class="flex-grow-1 my-lg-0 my-2 me-2">
																		<a href="<?php echo site_url('faq/'.$row->faq_id);?>" class="text-gray-800 fw-bolder text-hover-primary fs-6"><?php echo $row->faq_judul;?></a>
																		<span class="text-dark fw-bold d-block pt-1"><?=$this->fungsi->limit_words($row->faq_isi,10).'...';?></span>
																	</div>
																	<!--end::Title-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center">
																		<a href="<?php echo site_url('faq/'.$row->faq_id);?>" class="btn btn-icon btn-primary btn-sm border-0">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Item-->
														<?php $i++; endforeach;?>
														<!--begin::Item-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::List Widget 8-->
											</div>
										</div>
										<!--end::Row-->
									</div>
									<!--end::Container-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Curve bottom-->
								<div class="landing-curve landing-dark-color">
									<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
									</svg>
								</div>
								<!--end::Curve bottom-->
							</div>
							<!--end::Statistics Section-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::List Widget 5-->
									<div class="card card-xxl-stretch">
										<!--begin::Team Section-->
										<div class="py-10 py-lg-20">
											<!--begin::Container-->
											<div class="container">
												<!--begin::Heading-->
												<div class="text-center mb-12">
													<!--begin::Title-->
													<h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Youtube <?php echo $setup->nama_sekolah;?></h3>
													<!--end::Title-->
												</div>
												<!--end::Heading-->
												<!--begin::Slider-->
												<div class="tns tns-default">
													<!--begin::Wrapper-->
													<div data-tns="true" data-tns-loop="false" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="5000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="true" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
														
														<?php $i=1; foreach ($youtube2->result() as $row) : ?>
															<!--begin::Col-->
															<div class="col-md-4">
																<!--begin::Feature post-->
																<div class="card-xl-stretch me-md-6">
																	<!--begin::Image-->
																	<iframe class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" src="<?php echo 'https://www.youtube.com/embed/'.substr($row->youtube_link,strpos($row->youtube_link,"=")+1);?>" frameborder="0" allowfullscreen></iframe>
																	<!--end::Image-->
																	<!--begin::Body-->
																	<div class="m-0">
																		<!--begin::Title-->
																		<a href="<?php echo $row->youtube_link;?>" target="_blank" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base"><?php echo $row->youtube_description;?></a>
																		<!--end::Title-->
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Feature post-->
															</div>
															<!--end::Col-->
														<?php $i++; endforeach;?>
													</div>
													<!--end::Wrapper-->
													<!--begin::Button-->
													<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
														<span class="svg-icon svg-icon-3x">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
														<span class="svg-icon svg-icon-3x">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--end::Button-->
												</div>
												<!--end::Slider-->
											</div>
											<!--end::Container-->
										</div>
										<!--end::Team Section-->
									</div>
									<!--end: List Widget 5-->									
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Post-->