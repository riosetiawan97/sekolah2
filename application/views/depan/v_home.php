
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
							<div class="mb-n10 mb-lg-n20 z-index-2">
								<!--begin::Container-->
								<div class="container">
									
									<!--begin::Product slider-->
									<div class="tns tns-default">
										<!--begin::Slider-->
										<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="1000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
											<?php $i=1; foreach ($galeri_slider->result() as $row) : ?>
											<!--begin::Item-->
											<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
												<img src="<?php echo base_url().'assets/images/'.$row->	galeri_gambar;?>" class="card-rounded shadow mw-100" alt="" />
												
												<!--begin::Body-->
												<div class="m-0">
													<!--begin::Title-->
													<div class="fs-4 text-gray-600 fw-bolder text-hover-primary lh-base"><?php echo $row->galeri_judul;?></div>
													<!--end::Title-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Item-->
											<?php $i++; endforeach;?>
										</div>
										<!--end::Slider-->
										<!--begin::Slider button-->
										<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
											<span class="svg-icon svg-icon-3x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Slider button-->
										<!--begin::Slider button-->
										<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
											<span class="svg-icon svg-icon-3x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Slider button-->
									</div>
									<!--end::Product slider-->
								</div>
								<!--end::Container-->
							</div>
							<!--end::How It Works Section-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::List Widget 5-->
									<div class="card card-xxl-stretch">
										<div class="container" id="muck">
											<?php $i=1; foreach ($galeri_slider->result() as $row) : ?>
											<div class="mySlides">
												<div class="numbertext"><?php echo $i;?></div>
												<img src="<?php echo base_url().'assets/images/'.$row->	galeri_gambar;?>" class="imgslide">
											</div>
											<?php $i++; endforeach;?>  
												
											<a class="prev" onclick="plusSlides(-1)">❮</a>
											<a class="next" onclick="plusSlides(1)">❯</a>

											<div class="caption-container">
												<p id="caption"></p>
											</div>

											<div class="row">
												<?php $i=1; foreach ($galeri_slider->result() as $row) : ?>
													<div class="column">
														<img class="demo cursor" src="<?php echo base_url().'assets/images/'.$row->	galeri_gambar;?>" style="width:100%" onclick="currentSlide(<?php echo $i;?>)" alt="<?php echo $row->galeri_judul;?>">
													</div>
												<?php $i++; endforeach;?> 
											</div>
										</div>
									</div>
									<!--end: List Widget 5-->
								</div>
								<!--end::Col-->	
							</div>
							<!--end::Row-->
							<!--begin::Statistics Section-->
							<div class="mt-sm-n10">
								<!--begin::Curve top-->
								<div class="landing-curve landing-dark-color" style="z-index: -1;">
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
															<span class="fw-bolder text-dark">Latest Products</span>
															<span class="text-muted mt-1 fw-bold fs-7">Gifts and more</span>
														</h3>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-3">
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-17.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Cup &amp; Green</a>
																	<span class="text-dark fw-bold d-block pt-1">Visually stunning</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-10.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Pink Patterns</a>
																	<span class="text-dark fw-bold d-block pt-1">Feminine all around</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-1.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstract Art</a>
																	<span class="text-dark fw-bold d-block pt-1">The will to capture readers</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-9.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Desserts platter</a>
																	<span class="text-dark fw-bold d-block pt-1">Food trends &amp; inspirations</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
															<span class="fw-bolder text-dark">Latest Products</span>
															<span class="text-muted mt-1 fw-bold fs-7">Gifts and more</span>
														</h3>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-3">
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-17.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Cup &amp; Green</a>
																	<span class="text-dark fw-bold d-block pt-1">Visually stunning</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-10.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Pink Patterns</a>
																	<span class="text-dark fw-bold d-block pt-1">Feminine all around</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-1.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstract Art</a>
																	<span class="text-dark fw-bold d-block pt-1">The will to capture readers</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-9.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Desserts platter</a>
																	<span class="text-dark fw-bold d-block pt-1">Food trends &amp; inspirations</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
															<span class="fw-bolder text-dark">Latest Products</span>
															<span class="text-muted mt-1 fw-bold fs-7">Gifts and more</span>
														</h3>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-3">
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-17.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Cup &amp; Green</a>
																	<span class="text-dark fw-bold d-block pt-1">Visually stunning</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-10.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Pink Patterns</a>
																	<span class="text-dark fw-bold d-block pt-1">Feminine all around</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-1.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstract Art</a>
																	<span class="text-dark fw-bold d-block pt-1">The will to capture readers</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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
														<!--begin::Item-->
														<div class="d-flex align-items-sm-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-9.jpg')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
																<!--begin::Title-->
																<div class="flex-grow-1 my-lg-0 my-2 me-2">
																	<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Desserts platter</a>
																	<span class="text-dark fw-bold d-block pt-1">Food trends &amp; inspirations</span>
																</div>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-icon btn-light btn-sm border-0">
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