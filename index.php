<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="/css/style.css">
	<title>Document</title>
</head>

<body>
	<div class="page">
		<?php include_once "inc/header.php"; ?>

		<div class="main main-page">
			<section class="main-slider">
				<div class="main-slider__container">
					<div class="main-slider__body _swiper">
						<div class="main-slider__wrapper swiper-wrapper">
							<div class="main-slider__slide swiper-slide main-slider-slide slide-1">
								<div class="main-slider-slide__body">
									<div class="main-slider-slide__info slide-about-product">
										<div class="slide-about-product__name">MacBook Air</div>
										<div class="slide-about-product__desc">
											<p>С новой силой</p>
										</div>
										<div class="slide-about-product__price">
											<span>от 99 990 ₽</span>
										</div>
										<div class="slide-about-product__btn">
											<a href="#" class="btn-border">Купить</a>
										</div>


									</div>

									<div class="main-slider-slide__img">
										<picture>
											<source srcset="/img/main-slider/mac-mob.jpg" media="(max-width: 1024px)"
												type="image/jpg">
											<img src="/img/main-slider/mac.jpg" alt="">
										</picture>
									</div>
								</div>
							</div>
							<div class="main-slider__slide swiper-slide main-slider-slide slide-2">
								<div class="main-slider-slide__body">
									<div class="main-slider-slide__info slide-about-product">
										<div class="slide-about-product__name">IPHONE 14</div>
										<div class="slide-about-product__desc">
											<p>С новой силой</p>
										</div>
										<div class="slide-about-product__price">
											<span>от 19 990 ₽</span>
										</div>
										<div class="slide-about-product__btn">
											<a href="#" class="btn-border">Купить</a>
										</div>


									</div>

									<div class="main-slider-slide__img">
										<picture>
											<source srcset="/img/main-slider/iphone-mob.jpg" media="(max-width: 1024px)"
												type="image/jpg">
											<img src="/img/main-slider/iphone.jpg" alt="">
										</picture>

									</div>
								</div>
							</div>
							<div class="main-slider__slide swiper-slide main-slider-slide slide-2">
								<div class="main-slider-slide__body">
									<div class="main-slider-slide__info slide-about-product">
										<div class="slide-about-product__name">IPHONE 14</div>
										<div class="slide-about-product__desc">
											<p>С новой силой</p>
										</div>
										<div class="slide-about-product__price">
											<span>от 19 990 ₽</span>
										</div>
										<div class="slide-about-product__btn">
											<a href="#" class="btn-border">Купить</a>
										</div>


									</div>

									<div class="main-slider-slide__img">
										<picture>
											<source srcset="/img/main-slider/iphone-mob.jpg" media="(max-width: 1024px)"
												type="image/jpg">
											<img src="/img/main-slider/iphone.jpg" alt="">
										</picture>

									</div>
								</div>
							</div>
						</div>
						<div class="main-slider__pagination swiper-pagination"></div>
						<div class="main-slider__arrows slider-arrows">
							<div class="main-slider__arrow slider-arrows__item left">
								<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M9 1L1 9L9 17" stroke="#EBEBEB" />
								</svg>
							</div>
							<div class="main-slider__arrow slider-arrows__item right">
								<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M1 1L9 9L1 17" stroke="#EBEBEB" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="top-products">
				<div class="top-products__container container">
					<h2 class="top-products__title">Лидеры продаж</h2>
					<div class="top-products__slider _swiper">
						<div class="top-products__wrapper swiper-wrapper">
							<div class="top-products__item swiper-slide top-products-item">
								<a href="#" class="top-products-item__body">
									<div class="top-products-item__img">
										<picture>
											<img src="/img/top/iphone12pro-min.png" alt="">
										</picture>
									</div>
									<div class="top-products-item__info">
										<div class="top-products-item__name">iPhone 12 Pro</div>
										<div class="top-products-item__price">
											<span>от 99 990 ₽</span>
										</div>
									</div>
								</a>
							</div>
							<div class="top-products__item swiper-slide top-products-item">
								<a href="#" class="top-products-item__body">
									<div class="top-products-item__img">
										<picture>
											<img src="/img/top/iphone12-min.png" alt="">
										</picture>
									</div>
									<div class="top-products-item__info">
										<div class="top-products-item__name">iPhone 12</div>
										<div class="top-products-item__price">
											<span>от 79 990 ₽</span>
										</div>
									</div>
								</a>
							</div>
							<div class="top-products__item swiper-slide top-products-item">
								<a href="#" class="top-products-item__body">
									<div class="top-products-item__img">
										<picture>
											<img src="/img/top/iphoneSe-min.png" alt="">
										</picture>
									</div>
									<div class="top-products-item__info">
										<div class="top-products-item__name">iPhone SE</div>
										<div class="top-products-item__price">
											<span>от 39 990 ₽</span>
										</div>
									</div>
								</a>
							</div>
							<div class="top-products__item swiper-slide top-products-item">
								<a href="#" class="top-products-item__body">
									<div class="top-products-item__img">
										<picture>
											<img src="/img/top/apple-watch-min.png" alt="">
										</picture>
									</div>
									<div class="top-products-item__info">
										<div class="top-products-item__name">Watch Series 6</div>
										<div class="top-products-item__price">
											<span>от 29 990 ₽</span>
										</div>
									</div>
								</a>
							</div>
							<div class="top-products__item swiper-slide top-products-item col-start-1 col-end-3">
								<a href="#" class="top-products-item__body">
									<div class="top-products-item__img">
										<picture>
											<img src="/img/top/macbook-min.png" alt="">
										</picture>
									</div>
									<div class="top-products-item__info">
										<div class="top-products-item__name">MacBook Pro</div>
										<div class="top-products-item__price">
											<span>от 99 990 ₽</span>
										</div>
									</div>
								</a>
							</div>
							<div class="top-products__item swiper-slide top-products-item">
								<a href="#" class="top-products-item__body">
									<div class="top-products-item__img">
										<picture>
											<img src="/img/top/airpods-min.png" alt="">
										</picture>
									</div>
									<div class="top-products-item__info">
										<div class="top-products-item__name">AirPods</div>
										<div class="top-products-item__price">
											<span>от 19 990 ₽</span>
										</div>
									</div>
								</a>
							</div>
							<div class="top-products__item swiper-slide top-products-item">
								<a href="#" class="top-products-item__body">
									<div class="top-products-item__img">
										<picture>
											<img src="/img/top/ipad-min.png" alt="">
										</picture>
									</div>
									<div class="top-products-item__info">
										<div class="top-products-item__name">iPad Air 2020</div>
										<div class="top-products-item__price">
											<span>от 59 990 ₽</span>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="magsafe-banner">
				<div class="magsafe-banner__container container">
					<a href="#" class="magsafe-banner__content">
						<div class="magsafe-banner__left-block">
							<div class="magsafe-banner__title">MagSafe</div>
							<div class="magsafe-banner__text">
								<p>
									Аксессуары для вашего нового iPhone
								</p>
							</div>
						</div>
						<div class="magsafe-banner__img">
							<picture>
								<source srcset="/img/magsafe-mob.jpg" type="image/jpg" media="(max-width: 1024px)">
								<img src="/img/magsafe.jpg" alt="">
							</picture>

						</div>
					</a>
				</div>
			</section>
			<section class="our-news">
				<div class="our-news__container container">
					<h2 class="our-news__title">
						<span>Новости и акции</span>
						<span>Истории</span>
					</h2>
					<div class="our-news__slider">
						<div class="our-news__slider-body _swiper">
							<div class="our-news__wrapper swiper-wrapper">
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/1-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/2-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/3-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/4-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/5-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/6-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/1-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/2-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/3-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/4-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/5-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
								<div class="our-news__item swiper-slide our-news-item">
									<a href="#" class="our-news-item__body">
										<div class="our-news-item__img">
											<picture>
												<img src="/img/news/6-min.jpg" alt="">
											</picture>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="our-news__slider-scrollbar slider-scrollbar swiper-scrollbar"></div>
						<div class="our-news__slider-arrows slider-arrows black">
							<div class="our-news__slider-arrow slider-arrows__item left">
								<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M9 1L1 9L9 17" stroke="#EBEBEB" />
								</svg>
							</div>
							<div class="our-news__slider-arrow slider-arrows__item right">
								<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M1 1L9 9L1 17" stroke="#EBEBEB" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="main-benefits">
				<div class="main-benefits__container container">
					<div class="main-benefits__list">
						<div class="main-benefits__item main-benefits-item item-1">
							<div class="main-benefits-item__left-block">
								<div class="main-benefits-item__info">
									<div class="main-benefits-item__name">Trade-In</div>
									<div class="main-benefits-item__text">
										<p>Давайте меняться к лучшему</p>
									</div>
									<div class="main-benefits-item__more">
										<a href="#" class="link-arrow"><span>Подробнее</span>
											<svg width="5" height="8" viewBox="0 0 5 8" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M1 7L4 4L1 1" stroke="#333333" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
										</a>
									</div>
								</div>
							</div>
							<div class="main-benefits-item__img">
								<picture>
									<source srcset="/img/benefit-1-mob.png" type="image/png"
										media="(max-width: 1024px)">
									<img src="/img/benefit-1.png" alt="">
								</picture>
							</div>
						</div>
						<div class="main-benefits__item main-benefits-item item-2">
							<div class="main-benefits-item__left-block">
								<div class="main-benefits-item__info">
									<div class="main-benefits-item__name">Страхование техники Apple</div>
									<div class="main-benefits-item__text">
										<p>Ваше устройство и бюджет под надежной защитой</p>
									</div>
									<div class="main-benefits-item__more">
										<a href="#" class="link-arrow"><span>Подробнее</span>
											<svg width="5" height="8" viewBox="0 0 5 8" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M1 7L4 4L1 1" stroke="#333333" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
										</a>
									</div>
								</div>
							</div>
							<div class="main-benefits-item__img">
								<picture>
									<source srcset="/img/benefit-2-mob.png" type="image/png"
										media="(max-width: 1024px)">
									<img src="/img/benefit-2.png" alt="">
								</picture>
							</div>
						</div>
					</div>

				</div>
			</section>
			<section class="our-reviews">
				<div class="our-reviews__container container">
					<h2 class="our-reviews__title">Отзывы покупателей</h2>
					<div class="our-reviews__slider _swiper">
						<div class="our-reviews__slider-body">
							<div class="our-reviews__wrapper swiper-wrapper">
								<div class="our-reviews__item swiper-slide our-reviews-item">
									<div class="our-reviews-item__body">
										<div class="our-reviews-item__autor">
											<div class="our-reviews-item__photo">
												<picture>
													<img src="/img/reviews/person1.png" alt="">
												</picture>
											</div>
											<div class="our-reviews-item__box">
												<div class="our-reviews-item__name">Иван</div>
												<div class="our-reviews-item__stars">
													<div class="our-reviews-item__stars-icon">
														<svg width="104" height="20" viewBox="0 0 104 20" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M93.3343 2.04894C93.5438 1.40402 94.4562 1.40402 94.6657 2.04894L96.088 6.42614C96.1817 6.71456 96.4505 6.90983 96.7537 6.90983H101.356C102.034 6.90983 102.316 7.77756 101.768 8.17614L98.0442 10.8814C97.7988 11.0597 97.6962 11.3756 97.7899 11.664L99.2121 16.0412C99.4217 16.6862 98.6835 17.2224 98.1349 16.8239L94.4114 14.1186C94.1661 13.9403 93.8339 13.9403 93.5886 14.1186L89.8651 16.8239C89.3165 17.2224 88.5783 16.6862 88.7879 16.0412L90.2101 11.664C90.3038 11.3756 90.2012 11.0597 89.9558 10.8814L86.2324 8.17614C85.6838 7.77756 85.9657 6.90983 86.6438 6.90983H91.2463C91.5495 6.90983 91.8183 6.71456 91.912 6.42614L93.3343 2.04894Z"
																fill="#DCDCDC" />
															<path
																d="M72.3343 2.04894C72.5438 1.40402 73.4562 1.40402 73.6657 2.04894L75.088 6.42614C75.1817 6.71456 75.4505 6.90983 75.7537 6.90983H80.3562C81.0343 6.90983 81.3162 7.77756 80.7676 8.17614L77.0442 10.8814C76.7988 11.0597 76.6962 11.3756 76.7899 11.664L78.2121 16.0412C78.4217 16.6862 77.6835 17.2224 77.1349 16.8239L73.4114 14.1186C73.1661 13.9403 72.8339 13.9403 72.5886 14.1186L68.8651 16.8239C68.3165 17.2224 67.5783 16.6862 67.7879 16.0412L69.2101 11.664C69.3038 11.3756 69.2012 11.0597 68.9558 10.8814L65.2324 8.17614C64.6838 7.77756 64.9657 6.90983 65.6438 6.90983H70.2463C70.5495 6.90983 70.8183 6.71456 70.912 6.42614L72.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M51.3343 2.04894C51.5438 1.40402 52.4562 1.40402 52.6657 2.04894L54.088 6.42614C54.1817 6.71456 54.4505 6.90983 54.7537 6.90983H59.3562C60.0343 6.90983 60.3162 7.77756 59.7676 8.17614L56.0442 10.8814C55.7988 11.0597 55.6962 11.3756 55.7899 11.664L57.2121 16.0412C57.4217 16.6862 56.6835 17.2224 56.1349 16.8239L52.4114 14.1186C52.1661 13.9403 51.8339 13.9403 51.5886 14.1186L47.8651 16.8239C47.3165 17.2224 46.5783 16.6862 46.7879 16.0412L48.2101 11.664C48.3038 11.3756 48.2012 11.0597 47.9558 10.8814L44.2324 8.17614C43.6838 7.77756 43.9657 6.90983 44.6438 6.90983H49.2463C49.5495 6.90983 49.8183 6.71456 49.912 6.42614L51.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M30.3343 2.04894C30.5438 1.40402 31.4562 1.40402 31.6657 2.04894L33.088 6.42614C33.1817 6.71456 33.4505 6.90983 33.7537 6.90983H38.3562C39.0343 6.90983 39.3162 7.77756 38.7676 8.17614L35.0442 10.8814C34.7988 11.0597 34.6962 11.3756 34.7899 11.664L36.2121 16.0412C36.4217 16.6862 35.6835 17.2224 35.1349 16.8239L31.4114 14.1186C31.1661 13.9403 30.8339 13.9403 30.5886 14.1186L26.8651 16.8239C26.3165 17.2224 25.5783 16.6862 25.7879 16.0412L27.2101 11.664C27.3038 11.3756 27.2012 11.0597 26.9558 10.8814L23.2324 8.17614C22.6838 7.77756 22.9657 6.90983 23.6438 6.90983H28.2463C28.5495 6.90983 28.8183 6.71456 28.912 6.42614L30.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M9.33426 2.04894C9.54381 1.40402 10.4562 1.40402 10.6657 2.04894L12.088 6.42614C12.1817 6.71456 12.4505 6.90983 12.7537 6.90983H17.3562C18.0343 6.90983 18.3162 7.77756 17.7676 8.17614L14.0442 10.8814C13.7988 11.0597 13.6962 11.3756 13.7899 11.664L15.2121 16.0412C15.4217 16.6862 14.6835 17.2224 14.1349 16.8239L10.4114 14.1186C10.1661 13.9403 9.83389 13.9403 9.58855 14.1186L5.86508 16.8239C5.31648 17.2224 4.57834 16.6862 4.78789 16.0412L6.21013 11.664C6.30384 11.3756 6.20118 11.0597 5.95584 10.8814L2.23236 8.17614C1.68376 7.77756 1.96571 6.90983 2.64381 6.90983H7.24628C7.54954 6.90983 7.81831 6.71456 7.91202 6.42614L9.33426 2.04894Z"
																fill="#404040" />
														</svg>
													</div>
													<div class="our-reviews-item__stars-count">
														4 звезды
													</div>
												</div>
											</div>
										</div>
										<div class="our-reviews-item__text">
											<p>
												Молодцы, огромный респект! Необходимо было купить Макбук дочке на день
												рождения. И как назло, случилась «пандемия», когда всё везде закрыто.
												Оставался только один выход – удалённая покупка. В 16 часов заказал
												товар из
												дома онлайн, в 20 часов Макбук был уже
												на Сельме у меня в руках. Прямо чувствовалос...
											</p>
										</div>
										<div class="our-reviews-item__row">
											<div class="our-reviews-item__row-box">
												<div class="our-reviews-item__date">28.10.2020</div>
												<div class="our-reviews-item__more">
													<a href="#">
														<span>Читать полностью</span>
														<div class="our-reviews-item__more-icon">
															<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="15" cy="15" r="15" fill="#FAFAFA" />
																<path
																	d="M14.9958 16.7518L12.3963 22.5H10.5L13.3551 16.3531C12.0128 15.6818 11.1179 14.465 11.1179 12.2203C11.1179 9.07343 13.1421 7.5 15.5497 7.5H18V22.5H16.3594V16.7518H14.9958ZM16.3594 8.86364H15.4858C14.1648 8.86364 12.8864 9.72376 12.8864 12.2203C12.8864 14.6328 14.0583 15.409 15.4858 15.409H16.3594V8.86364Z"
																	fill="#D2232A" />
															</svg>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="our-reviews__item swiper-slide our-reviews-item">
									<div class="our-reviews-item__body">
										<div class="our-reviews-item__autor">
											<div class="our-reviews-item__photo">
												<picture>
													<img src="/img/reviews/person2.png" alt="">
												</picture>
											</div>
											<div class="our-reviews-item__box">
												<div class="our-reviews-item__name">Иван</div>
												<div class="our-reviews-item__stars">
													<div class="our-reviews-item__stars-icon">
														<svg width="104" height="20" viewBox="0 0 104 20" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M93.3343 2.04894C93.5438 1.40402 94.4562 1.40402 94.6657 2.04894L96.088 6.42614C96.1817 6.71456 96.4505 6.90983 96.7537 6.90983H101.356C102.034 6.90983 102.316 7.77756 101.768 8.17614L98.0442 10.8814C97.7988 11.0597 97.6962 11.3756 97.7899 11.664L99.2121 16.0412C99.4217 16.6862 98.6835 17.2224 98.1349 16.8239L94.4114 14.1186C94.1661 13.9403 93.8339 13.9403 93.5886 14.1186L89.8651 16.8239C89.3165 17.2224 88.5783 16.6862 88.7879 16.0412L90.2101 11.664C90.3038 11.3756 90.2012 11.0597 89.9558 10.8814L86.2324 8.17614C85.6838 7.77756 85.9657 6.90983 86.6438 6.90983H91.2463C91.5495 6.90983 91.8183 6.71456 91.912 6.42614L93.3343 2.04894Z"
																fill="#DCDCDC" />
															<path
																d="M72.3343 2.04894C72.5438 1.40402 73.4562 1.40402 73.6657 2.04894L75.088 6.42614C75.1817 6.71456 75.4505 6.90983 75.7537 6.90983H80.3562C81.0343 6.90983 81.3162 7.77756 80.7676 8.17614L77.0442 10.8814C76.7988 11.0597 76.6962 11.3756 76.7899 11.664L78.2121 16.0412C78.4217 16.6862 77.6835 17.2224 77.1349 16.8239L73.4114 14.1186C73.1661 13.9403 72.8339 13.9403 72.5886 14.1186L68.8651 16.8239C68.3165 17.2224 67.5783 16.6862 67.7879 16.0412L69.2101 11.664C69.3038 11.3756 69.2012 11.0597 68.9558 10.8814L65.2324 8.17614C64.6838 7.77756 64.9657 6.90983 65.6438 6.90983H70.2463C70.5495 6.90983 70.8183 6.71456 70.912 6.42614L72.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M51.3343 2.04894C51.5438 1.40402 52.4562 1.40402 52.6657 2.04894L54.088 6.42614C54.1817 6.71456 54.4505 6.90983 54.7537 6.90983H59.3562C60.0343 6.90983 60.3162 7.77756 59.7676 8.17614L56.0442 10.8814C55.7988 11.0597 55.6962 11.3756 55.7899 11.664L57.2121 16.0412C57.4217 16.6862 56.6835 17.2224 56.1349 16.8239L52.4114 14.1186C52.1661 13.9403 51.8339 13.9403 51.5886 14.1186L47.8651 16.8239C47.3165 17.2224 46.5783 16.6862 46.7879 16.0412L48.2101 11.664C48.3038 11.3756 48.2012 11.0597 47.9558 10.8814L44.2324 8.17614C43.6838 7.77756 43.9657 6.90983 44.6438 6.90983H49.2463C49.5495 6.90983 49.8183 6.71456 49.912 6.42614L51.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M30.3343 2.04894C30.5438 1.40402 31.4562 1.40402 31.6657 2.04894L33.088 6.42614C33.1817 6.71456 33.4505 6.90983 33.7537 6.90983H38.3562C39.0343 6.90983 39.3162 7.77756 38.7676 8.17614L35.0442 10.8814C34.7988 11.0597 34.6962 11.3756 34.7899 11.664L36.2121 16.0412C36.4217 16.6862 35.6835 17.2224 35.1349 16.8239L31.4114 14.1186C31.1661 13.9403 30.8339 13.9403 30.5886 14.1186L26.8651 16.8239C26.3165 17.2224 25.5783 16.6862 25.7879 16.0412L27.2101 11.664C27.3038 11.3756 27.2012 11.0597 26.9558 10.8814L23.2324 8.17614C22.6838 7.77756 22.9657 6.90983 23.6438 6.90983H28.2463C28.5495 6.90983 28.8183 6.71456 28.912 6.42614L30.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M9.33426 2.04894C9.54381 1.40402 10.4562 1.40402 10.6657 2.04894L12.088 6.42614C12.1817 6.71456 12.4505 6.90983 12.7537 6.90983H17.3562C18.0343 6.90983 18.3162 7.77756 17.7676 8.17614L14.0442 10.8814C13.7988 11.0597 13.6962 11.3756 13.7899 11.664L15.2121 16.0412C15.4217 16.6862 14.6835 17.2224 14.1349 16.8239L10.4114 14.1186C10.1661 13.9403 9.83389 13.9403 9.58855 14.1186L5.86508 16.8239C5.31648 17.2224 4.57834 16.6862 4.78789 16.0412L6.21013 11.664C6.30384 11.3756 6.20118 11.0597 5.95584 10.8814L2.23236 8.17614C1.68376 7.77756 1.96571 6.90983 2.64381 6.90983H7.24628C7.54954 6.90983 7.81831 6.71456 7.91202 6.42614L9.33426 2.04894Z"
																fill="#404040" />
														</svg>
													</div>
													<div class="our-reviews-item__stars-count">
														4 звезды
													</div>
												</div>
											</div>
										</div>
										<div class="our-reviews-item__text">
											<p>
												Молодцы, огромный респект! Необходимо было купить Макбук дочке на день
												рождения. И как назло, случилась «пандемия», когда всё везде закрыто.
												Оставался только один выход – удалённая покупка.
											</p>
										</div>
										<div class="our-reviews-item__row">
											<div class="our-reviews-item__row-box">
												<div class="our-reviews-item__date">28.10.2020</div>
												<div class="our-reviews-item__more">
													<a href="#">
														<span>Читать полностью</span>
														<div class="our-reviews-item__more-icon">
															<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="15" cy="15" r="15" fill="#FAFAFA" />
																<g clip-path="url(#clip0_5138_386)">
																	<path
																		d="M22.7023 15.6723C22.7023 15.1625 22.661 14.6499 22.5728 14.1483H15.4985V17.0364H19.5496C19.3815 17.9679 18.8414 18.7919 18.0504 19.3155V21.1895H20.4673C21.8866 19.8832 22.7023 17.9541 22.7023 15.6723Z"
																		fill="#4285F4" />
																	<path
																		d="M15.4987 23C17.5215 23 19.2273 22.3358 20.4702 21.1894L18.0534 19.3154C17.3809 19.7729 16.5128 20.0319 15.5015 20.0319C13.5448 20.0319 11.8858 18.7119 11.2905 16.9371H8.79651V18.869C10.0697 21.4016 12.6629 23 15.4987 23Z"
																		fill="#34A853" />
																	<path
																		d="M11.2877 16.9372C10.9736 16.0057 10.9736 14.9971 11.2877 14.0656V12.1338H8.79647C7.73272 14.253 7.73272 16.7498 8.79647 18.869L11.2877 16.9372Z"
																		fill="#FBBC04" />
																	<path
																		d="M15.4987 10.968C16.5679 10.9515 17.6014 11.3539 18.3758 12.0924L20.517 9.95115C19.1612 8.67795 17.3616 7.97797 15.4987 8.00002C12.6629 8.00002 10.0697 9.5984 8.79651 12.1338L11.2878 14.0656C11.8803 12.2881 13.542 10.968 15.4987 10.968Z"
																		fill="#EA4335" />
																</g>
																<defs>
																	<clipPath id="clip0_5138_386">
																		<rect width="14.7024" height="15" fill="white"
																			transform="translate(8 8)" />
																	</clipPath>
																</defs>
															</svg>
														</div>
													</a>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="our-reviews__item swiper-slide our-reviews-item">
									<div class="our-reviews-item__body">
										<div class="our-reviews-item__autor">
											<div class="our-reviews-item__photo">
												<picture>
													<img src="/img/reviews/person1.png" alt="">
												</picture>
											</div>
											<div class="our-reviews-item__box">
												<div class="our-reviews-item__name">Иван</div>
												<div class="our-reviews-item__stars">
													<div class="our-reviews-item__stars-icon">
														<svg width="104" height="20" viewBox="0 0 104 20" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M93.3343 2.04894C93.5438 1.40402 94.4562 1.40402 94.6657 2.04894L96.088 6.42614C96.1817 6.71456 96.4505 6.90983 96.7537 6.90983H101.356C102.034 6.90983 102.316 7.77756 101.768 8.17614L98.0442 10.8814C97.7988 11.0597 97.6962 11.3756 97.7899 11.664L99.2121 16.0412C99.4217 16.6862 98.6835 17.2224 98.1349 16.8239L94.4114 14.1186C94.1661 13.9403 93.8339 13.9403 93.5886 14.1186L89.8651 16.8239C89.3165 17.2224 88.5783 16.6862 88.7879 16.0412L90.2101 11.664C90.3038 11.3756 90.2012 11.0597 89.9558 10.8814L86.2324 8.17614C85.6838 7.77756 85.9657 6.90983 86.6438 6.90983H91.2463C91.5495 6.90983 91.8183 6.71456 91.912 6.42614L93.3343 2.04894Z"
																fill="#DCDCDC" />
															<path
																d="M72.3343 2.04894C72.5438 1.40402 73.4562 1.40402 73.6657 2.04894L75.088 6.42614C75.1817 6.71456 75.4505 6.90983 75.7537 6.90983H80.3562C81.0343 6.90983 81.3162 7.77756 80.7676 8.17614L77.0442 10.8814C76.7988 11.0597 76.6962 11.3756 76.7899 11.664L78.2121 16.0412C78.4217 16.6862 77.6835 17.2224 77.1349 16.8239L73.4114 14.1186C73.1661 13.9403 72.8339 13.9403 72.5886 14.1186L68.8651 16.8239C68.3165 17.2224 67.5783 16.6862 67.7879 16.0412L69.2101 11.664C69.3038 11.3756 69.2012 11.0597 68.9558 10.8814L65.2324 8.17614C64.6838 7.77756 64.9657 6.90983 65.6438 6.90983H70.2463C70.5495 6.90983 70.8183 6.71456 70.912 6.42614L72.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M51.3343 2.04894C51.5438 1.40402 52.4562 1.40402 52.6657 2.04894L54.088 6.42614C54.1817 6.71456 54.4505 6.90983 54.7537 6.90983H59.3562C60.0343 6.90983 60.3162 7.77756 59.7676 8.17614L56.0442 10.8814C55.7988 11.0597 55.6962 11.3756 55.7899 11.664L57.2121 16.0412C57.4217 16.6862 56.6835 17.2224 56.1349 16.8239L52.4114 14.1186C52.1661 13.9403 51.8339 13.9403 51.5886 14.1186L47.8651 16.8239C47.3165 17.2224 46.5783 16.6862 46.7879 16.0412L48.2101 11.664C48.3038 11.3756 48.2012 11.0597 47.9558 10.8814L44.2324 8.17614C43.6838 7.77756 43.9657 6.90983 44.6438 6.90983H49.2463C49.5495 6.90983 49.8183 6.71456 49.912 6.42614L51.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M30.3343 2.04894C30.5438 1.40402 31.4562 1.40402 31.6657 2.04894L33.088 6.42614C33.1817 6.71456 33.4505 6.90983 33.7537 6.90983H38.3562C39.0343 6.90983 39.3162 7.77756 38.7676 8.17614L35.0442 10.8814C34.7988 11.0597 34.6962 11.3756 34.7899 11.664L36.2121 16.0412C36.4217 16.6862 35.6835 17.2224 35.1349 16.8239L31.4114 14.1186C31.1661 13.9403 30.8339 13.9403 30.5886 14.1186L26.8651 16.8239C26.3165 17.2224 25.5783 16.6862 25.7879 16.0412L27.2101 11.664C27.3038 11.3756 27.2012 11.0597 26.9558 10.8814L23.2324 8.17614C22.6838 7.77756 22.9657 6.90983 23.6438 6.90983H28.2463C28.5495 6.90983 28.8183 6.71456 28.912 6.42614L30.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M9.33426 2.04894C9.54381 1.40402 10.4562 1.40402 10.6657 2.04894L12.088 6.42614C12.1817 6.71456 12.4505 6.90983 12.7537 6.90983H17.3562C18.0343 6.90983 18.3162 7.77756 17.7676 8.17614L14.0442 10.8814C13.7988 11.0597 13.6962 11.3756 13.7899 11.664L15.2121 16.0412C15.4217 16.6862 14.6835 17.2224 14.1349 16.8239L10.4114 14.1186C10.1661 13.9403 9.83389 13.9403 9.58855 14.1186L5.86508 16.8239C5.31648 17.2224 4.57834 16.6862 4.78789 16.0412L6.21013 11.664C6.30384 11.3756 6.20118 11.0597 5.95584 10.8814L2.23236 8.17614C1.68376 7.77756 1.96571 6.90983 2.64381 6.90983H7.24628C7.54954 6.90983 7.81831 6.71456 7.91202 6.42614L9.33426 2.04894Z"
																fill="#404040" />
														</svg>
													</div>
													<div class="our-reviews-item__stars-count">
														4 звезды
													</div>
												</div>
											</div>
										</div>
										<div class="our-reviews-item__text">
											<p>
												Молодцы, огромный респект! Необходимо было купить Макбук дочке на день
												рождения. И как назло, случилась «пандемия», когда всё везде закрыто.
												Оставался только один выход – удалённая покупка. В 16 часов заказал
												товар из
												дома онлайн, в 20 часов Макбук был уже
												на Сельме у меня в руках. Прямо чувствовалос...
											</p>
										</div>
										<div class="our-reviews-item__row">
											<div class="our-reviews-item__row-box">
												<div class="our-reviews-item__date">28.10.2020</div>
												<div class="our-reviews-item__more">
													<a href="#">
														<span>Читать полностью</span>
														<div class="our-reviews-item__more-icon">
															<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="15" cy="15" r="15" fill="#FAFAFA" />
																<path
																	d="M14.9958 16.7518L12.3963 22.5H10.5L13.3551 16.3531C12.0128 15.6818 11.1179 14.465 11.1179 12.2203C11.1179 9.07343 13.1421 7.5 15.5497 7.5H18V22.5H16.3594V16.7518H14.9958ZM16.3594 8.86364H15.4858C14.1648 8.86364 12.8864 9.72376 12.8864 12.2203C12.8864 14.6328 14.0583 15.409 15.4858 15.409H16.3594V8.86364Z"
																	fill="#D2232A" />
															</svg>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="our-reviews__item swiper-slide our-reviews-item">
									<div class="our-reviews-item__body">
										<div class="our-reviews-item__autor">
											<div class="our-reviews-item__photo">
												<picture>
													<img src="/img/reviews/person2.png" alt="">
												</picture>
											</div>
											<div class="our-reviews-item__box">
												<div class="our-reviews-item__name">Иван</div>
												<div class="our-reviews-item__stars">
													<div class="our-reviews-item__stars-icon">
														<svg width="104" height="20" viewBox="0 0 104 20" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M93.3343 2.04894C93.5438 1.40402 94.4562 1.40402 94.6657 2.04894L96.088 6.42614C96.1817 6.71456 96.4505 6.90983 96.7537 6.90983H101.356C102.034 6.90983 102.316 7.77756 101.768 8.17614L98.0442 10.8814C97.7988 11.0597 97.6962 11.3756 97.7899 11.664L99.2121 16.0412C99.4217 16.6862 98.6835 17.2224 98.1349 16.8239L94.4114 14.1186C94.1661 13.9403 93.8339 13.9403 93.5886 14.1186L89.8651 16.8239C89.3165 17.2224 88.5783 16.6862 88.7879 16.0412L90.2101 11.664C90.3038 11.3756 90.2012 11.0597 89.9558 10.8814L86.2324 8.17614C85.6838 7.77756 85.9657 6.90983 86.6438 6.90983H91.2463C91.5495 6.90983 91.8183 6.71456 91.912 6.42614L93.3343 2.04894Z"
																fill="#DCDCDC" />
															<path
																d="M72.3343 2.04894C72.5438 1.40402 73.4562 1.40402 73.6657 2.04894L75.088 6.42614C75.1817 6.71456 75.4505 6.90983 75.7537 6.90983H80.3562C81.0343 6.90983 81.3162 7.77756 80.7676 8.17614L77.0442 10.8814C76.7988 11.0597 76.6962 11.3756 76.7899 11.664L78.2121 16.0412C78.4217 16.6862 77.6835 17.2224 77.1349 16.8239L73.4114 14.1186C73.1661 13.9403 72.8339 13.9403 72.5886 14.1186L68.8651 16.8239C68.3165 17.2224 67.5783 16.6862 67.7879 16.0412L69.2101 11.664C69.3038 11.3756 69.2012 11.0597 68.9558 10.8814L65.2324 8.17614C64.6838 7.77756 64.9657 6.90983 65.6438 6.90983H70.2463C70.5495 6.90983 70.8183 6.71456 70.912 6.42614L72.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M51.3343 2.04894C51.5438 1.40402 52.4562 1.40402 52.6657 2.04894L54.088 6.42614C54.1817 6.71456 54.4505 6.90983 54.7537 6.90983H59.3562C60.0343 6.90983 60.3162 7.77756 59.7676 8.17614L56.0442 10.8814C55.7988 11.0597 55.6962 11.3756 55.7899 11.664L57.2121 16.0412C57.4217 16.6862 56.6835 17.2224 56.1349 16.8239L52.4114 14.1186C52.1661 13.9403 51.8339 13.9403 51.5886 14.1186L47.8651 16.8239C47.3165 17.2224 46.5783 16.6862 46.7879 16.0412L48.2101 11.664C48.3038 11.3756 48.2012 11.0597 47.9558 10.8814L44.2324 8.17614C43.6838 7.77756 43.9657 6.90983 44.6438 6.90983H49.2463C49.5495 6.90983 49.8183 6.71456 49.912 6.42614L51.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M30.3343 2.04894C30.5438 1.40402 31.4562 1.40402 31.6657 2.04894L33.088 6.42614C33.1817 6.71456 33.4505 6.90983 33.7537 6.90983H38.3562C39.0343 6.90983 39.3162 7.77756 38.7676 8.17614L35.0442 10.8814C34.7988 11.0597 34.6962 11.3756 34.7899 11.664L36.2121 16.0412C36.4217 16.6862 35.6835 17.2224 35.1349 16.8239L31.4114 14.1186C31.1661 13.9403 30.8339 13.9403 30.5886 14.1186L26.8651 16.8239C26.3165 17.2224 25.5783 16.6862 25.7879 16.0412L27.2101 11.664C27.3038 11.3756 27.2012 11.0597 26.9558 10.8814L23.2324 8.17614C22.6838 7.77756 22.9657 6.90983 23.6438 6.90983H28.2463C28.5495 6.90983 28.8183 6.71456 28.912 6.42614L30.3343 2.04894Z"
																fill="#404040" />
															<path
																d="M9.33426 2.04894C9.54381 1.40402 10.4562 1.40402 10.6657 2.04894L12.088 6.42614C12.1817 6.71456 12.4505 6.90983 12.7537 6.90983H17.3562C18.0343 6.90983 18.3162 7.77756 17.7676 8.17614L14.0442 10.8814C13.7988 11.0597 13.6962 11.3756 13.7899 11.664L15.2121 16.0412C15.4217 16.6862 14.6835 17.2224 14.1349 16.8239L10.4114 14.1186C10.1661 13.9403 9.83389 13.9403 9.58855 14.1186L5.86508 16.8239C5.31648 17.2224 4.57834 16.6862 4.78789 16.0412L6.21013 11.664C6.30384 11.3756 6.20118 11.0597 5.95584 10.8814L2.23236 8.17614C1.68376 7.77756 1.96571 6.90983 2.64381 6.90983H7.24628C7.54954 6.90983 7.81831 6.71456 7.91202 6.42614L9.33426 2.04894Z"
																fill="#404040" />
														</svg>
													</div>
													<div class="our-reviews-item__stars-count">
														4 звезды
													</div>
												</div>
											</div>
										</div>
										<div class="our-reviews-item__text">
											<p>
												Молодцы, огромный респект! Необходимо было купить Макбук дочке на день
												рождения. И как назло, случилась «пандемия», когда всё везде закрыто.
												Оставался только один выход – удалённая покупка.
											</p>
										</div>
										<div class="our-reviews-item__row">
											<div class="our-reviews-item__row-box">
												<div class="our-reviews-item__date">28.10.2020</div>
												<div class="our-reviews-item__more">
													<a href="#">
														<span>Читать полностью</span>
														<div class="our-reviews-item__more-icon">
															<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="15" cy="15" r="15" fill="#FAFAFA" />
																<g clip-path="url(#clip0_5138_386)">
																	<path
																		d="M22.7023 15.6723C22.7023 15.1625 22.661 14.6499 22.5728 14.1483H15.4985V17.0364H19.5496C19.3815 17.9679 18.8414 18.7919 18.0504 19.3155V21.1895H20.4673C21.8866 19.8832 22.7023 17.9541 22.7023 15.6723Z"
																		fill="#4285F4" />
																	<path
																		d="M15.4987 23C17.5215 23 19.2273 22.3358 20.4702 21.1894L18.0534 19.3154C17.3809 19.7729 16.5128 20.0319 15.5015 20.0319C13.5448 20.0319 11.8858 18.7119 11.2905 16.9371H8.79651V18.869C10.0697 21.4016 12.6629 23 15.4987 23Z"
																		fill="#34A853" />
																	<path
																		d="M11.2877 16.9372C10.9736 16.0057 10.9736 14.9971 11.2877 14.0656V12.1338H8.79647C7.73272 14.253 7.73272 16.7498 8.79647 18.869L11.2877 16.9372Z"
																		fill="#FBBC04" />
																	<path
																		d="M15.4987 10.968C16.5679 10.9515 17.6014 11.3539 18.3758 12.0924L20.517 9.95115C19.1612 8.67795 17.3616 7.97797 15.4987 8.00002C12.6629 8.00002 10.0697 9.5984 8.79651 12.1338L11.2878 14.0656C11.8803 12.2881 13.542 10.968 15.4987 10.968Z"
																		fill="#EA4335" />
																</g>
																<defs>
																	<clipPath id="clip0_5138_386">
																		<rect width="14.7024" height="15" fill="white"
																			transform="translate(8 8)" />
																	</clipPath>
																</defs>
															</svg>
														</div>
													</a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="our-reviews__slider-scrollbar slider-scrollbar swiper-scrollbar"></div>
						<div class="our-reviews__slider-arrows slider-arrows black">
							<div class="our-reviews__slider-arrow slider-arrows__item left">
								<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M9 1L1 9L9 17" stroke="#EBEBEB" />
								</svg>
							</div>
							<div class="our-reviews__slider-arrow slider-arrows__item right">
								<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M1 1L9 9L1 17" stroke="#EBEBEB" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="main-services">
				<div class="main-services__container container">
					<div class="main-services__list">
						<div class="main-services__item main-service-item">
							<div class="main-service-item__bg">
								<picture>
									<source srcset="/img/main-service-mob-1.jpg" type="image/jpg"
										media="(max-width: 1024px)">
									<img src="/img/main-service-1.jpg" alt="">
								</picture>
							</div>
							<div class="main-service-item__info">
								<div class="main-service-item__name">iCenter Service</div>
								<div class="main-service-item__text">
									<p>iCenter является официальным сервисным центром Apple в Калининграде</p>
								</div>
								<div class="main-service-item__btn">
									<a href="#" class="btn-arrow">
										<span>Подробнее</span>
										<svg width="8" height="13" viewBox="0 0 8 13" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1.5L6 6.5L1 11.5" stroke="#333333" stroke-width="1.5" />
										</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="main-services__item main-service-item">
							<div class="main-service-item__bg">
								<picture>
									<source srcset="/img/main-service-mob-2.jpg" type="image/jpg"
										media="(max-width: 1024px)">
									<img src="/img/main-service-2.jpg" alt="">
								</picture>
							</div>
							<div class="main-service-item__info">
								<div class="main-service-item__name">Учебный центр iCenter</div>
								<div class="main-service-item__text">
									<p>Обучение для начинающих и продвинутых&nbsp;пользователей</p>
								</div>
								<div class="main-service-item__btn">
									<a href="#" class="btn-arrow">
										<span>Подробнее</span>
										<svg width="8" height="13" viewBox="0 0 8 13" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1.5L6 6.5L1 11.5" stroke="#333333" stroke-width="1.5" />
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="special-suggest">
				<div class="special-suggest__container container">
					<h2 class="special-suggest__title">Специальные предложения</h2>
					<div class="special-suggest__content ajax-cards-products">
						<div class="special-suggest__slider _swiper">
							<div class="special-suggest__slider-body">
								<div class="special-suggest__wrapper swiper-wrapper">
									<div class="special-suggest__item swiper-slide special-suggest-item card-product">
										<div class="special-suggest-item__body card-product__body">
											<div class="special-suggest-item__marks card-product__marks">
												<div class="special-suggest-item__mark card-product__mark blue">
													Рассрочка
													0-0-33
												</div>
												<div class="special-suggest-item__mark card-product__mark red">Новинка
												</div>
											</div>
											<div class="special-suggest-item__icons card-product__icons">
												<div class="special-suggest-item__icon card-product__icon comparisons">
													<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M15 20V10M8 20V0M1 20V5" stroke="#333333"
															stroke-width="2" stroke-linejoin="bevel" />
													</svg>
												</div>
												<div
													class="special-suggest-item__icon card-product__icon favorites icon-product-favorites add-favorites-product__js">
													<svg width="20" height="19" viewBox="0 0 20 19" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M1 6.5C1 1.39295 7.75 -0.460562 10 4.18C12.25 -0.460562 19 1.39301 19 6.50006C19 11.6071 10 17.5209 10 17.5209C10 17.5209 1 11.607 1 6.5Z"
															fill="transparent" stroke="#333333" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="bevel" />
													</svg>

												</div>
											</div>
											<div class="special-suggest-item__slider card-product__slider _swiper">
												<div
													class="special-suggest-item__wrapper card-product__wrapper swiper-wrapper">
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/1.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/1.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/1.jpg" alt="">
														</picture>
													</div>
												</div>
												<div
													class="special-suggest-item__slider-pagination card-product__slider-pagination swiper-pagination">
												</div>
											</div>
											<div class="special-suggest-item__info card-product__info">
												<div class="special-suggest-item__price card-product__price">
													<span class="new">44 990 ₽</span>
													<span class="old">64 990 ₽</span>
												</div>
												<div class="special-suggest-item__name card-product__name">iPhone SE 128
													ГБ,
													(product) red</div>
												<div
													class="special-suggest-item__installment card-product__installment">
													от
													5 600 ₽ в мес.</div>
												<div class="special-suggest-item__row card-product__row">
													<div class="special-suggest-item__raiting card-product__raiting">
														<div class="card-product__raiting-icon">
															<svg width="13" height="13" viewBox="0 0 13 13" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M5.92937 0.756229C6.10898 0.203442 6.89102 0.203444 7.07063 0.75623L8.1614 4.11327C8.24173 4.36049 8.4721 4.52786 8.73204 4.52786H12.2618C12.8431 4.52786 13.0847 5.27163 12.6145 5.61327L9.75884 7.68804C9.54855 7.84083 9.46055 8.11165 9.54088 8.35886L10.6316 11.7159C10.8113 12.2687 10.1786 12.7284 9.70834 12.3867L6.85267 10.312C6.64238 10.1592 6.35762 10.1592 6.14733 10.312L3.29166 12.3867C2.82143 12.7284 2.18874 12.2687 2.36835 11.7159L3.45912 8.35886C3.53945 8.11165 3.45145 7.84083 3.24116 7.68804L0.385485 5.61327C-0.0847429 5.27163 0.156924 4.52786 0.738158 4.52786H4.26796C4.5279 4.52786 4.75827 4.36049 4.8386 4.11327L5.92937 0.756229Z"
																	fill="#D2232A" />
															</svg>
														</div>
														<div class="card-product__raiting-count">4,5</div>
													</div>
													<div class="card-product__reviews">125 отзывов</div>
												</div>
											</div>
											<div class="special-suggest-item__btn card-product__btn">
												<span class="btn add-product-basket__js">Добавить в корзину</span>
											</div>
										</div>
									</div>
									<div class="special-suggest__item swiper-slide special-suggest-item card-product">
										<div class="special-suggest-item__body card-product__body">
											<div class="special-suggest-item__marks card-product__marks">
												<div class="special-suggest-item__mark card-product__mark blue">
													Рассрочка
													0-0-33
												</div>
												<div class="special-suggest-item__mark card-product__mark red">Новинка
												</div>
											</div>
											<div class="special-suggest-item__icons card-product__icons">
												<div class="special-suggest-item__icon card-product__icon comparisons">
													<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M15 20V10M8 20V0M1 20V5" stroke="#333333"
															stroke-width="2" stroke-linejoin="bevel" />
													</svg>
												</div>
												<div
													class="special-suggest-item__icon card-product__icon favorites icon-product-favorites add-favorites-product__js">
													<svg width="20" height="19" viewBox="0 0 20 19" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M1 6.5C1 1.39295 7.75 -0.460562 10 4.18C12.25 -0.460562 19 1.39301 19 6.50006C19 11.6071 10 17.5209 10 17.5209C10 17.5209 1 11.607 1 6.5Z"
															fill="transparent" stroke="#333333" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="bevel" />
													</svg>
												</div>
											</div>
											<div class="special-suggest-item__slider card-product__slider _swiper">
												<div
													class="special-suggest-item__wrapper card-product__wrapper swiper-wrapper">
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/2.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/2.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/2.jpg" alt="">
														</picture>
													</div>
												</div>
												<div
													class="special-suggest-item__slider-pagination card-product__slider-pagination swiper-pagination">
												</div>
											</div>
											<div class="special-suggest-item__info card-product__info">
												<div class="special-suggest-item__price card-product__price">
													<span class="new">44 990 ₽</span>
													<span class="old">64 990 ₽</span>
												</div>
												<div class="special-suggest-item__name card-product__name">iPhone SE 128
													ГБ,
													(product) red</div>
												<div
													class="special-suggest-item__installment card-product__installment">
													от
													5 600 ₽ в мес.</div>
												<div class="special-suggest-item__row card-product__row">
													<div class="special-suggest-item__raiting card-product__raiting">
														<div class="card-product__raiting-icon">
															<svg width="13" height="13" viewBox="0 0 13 13" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M5.92937 0.756229C6.10898 0.203442 6.89102 0.203444 7.07063 0.75623L8.1614 4.11327C8.24173 4.36049 8.4721 4.52786 8.73204 4.52786H12.2618C12.8431 4.52786 13.0847 5.27163 12.6145 5.61327L9.75884 7.68804C9.54855 7.84083 9.46055 8.11165 9.54088 8.35886L10.6316 11.7159C10.8113 12.2687 10.1786 12.7284 9.70834 12.3867L6.85267 10.312C6.64238 10.1592 6.35762 10.1592 6.14733 10.312L3.29166 12.3867C2.82143 12.7284 2.18874 12.2687 2.36835 11.7159L3.45912 8.35886C3.53945 8.11165 3.45145 7.84083 3.24116 7.68804L0.385485 5.61327C-0.0847429 5.27163 0.156924 4.52786 0.738158 4.52786H4.26796C4.5279 4.52786 4.75827 4.36049 4.8386 4.11327L5.92937 0.756229Z"
																	fill="#D2232A" />
															</svg>
														</div>
														<div class="card-product__raiting-count">4,5</div>
													</div>
													<div class="card-product__reviews">125 отзывов</div>
												</div>
											</div>
											<div class="special-suggest-item__btn card-product__btn">
												<span class="btn add-product-basket__js">Добавить в корзину</span>
											</div>
										</div>
									</div>
									<div class="special-suggest__item swiper-slide special-suggest-item card-product">
										<div class="special-suggest-item__body card-product__body">
											<div class="special-suggest-item__marks card-product__marks">
												<div class="special-suggest-item__mark card-product__mark blue">
													Рассрочка
													0-0-33
												</div>
												<div class="special-suggest-item__mark card-product__mark red">Новинка
												</div>
											</div>
											<div class="special-suggest-item__icons card-product__icons">
												<div class="special-suggest-item__icon card-product__icon comparisons">
													<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M15 20V10M8 20V0M1 20V5" stroke="#333333"
															stroke-width="2" stroke-linejoin="bevel" />
													</svg>
												</div>
												<div
													class="special-suggest-item__icon card-product__icon favorites icon-product-favorites add-favorites-product__js">
													<svg width="20" height="19" viewBox="0 0 20 19" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M1 6.5C1 1.39295 7.75 -0.460562 10 4.18C12.25 -0.460562 19 1.39301 19 6.50006C19 11.6071 10 17.5209 10 17.5209C10 17.5209 1 11.607 1 6.5Z"
															fill="transparent" stroke="#333333" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="bevel" />
													</svg>

												</div>
											</div>
											<div class="special-suggest-item__slider card-product__slider _swiper">
												<div
													class="special-suggest-item__wrapper card-product__wrapper swiper-wrapper">
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/1.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/1.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/1.jpg" alt="">
														</picture>
													</div>
												</div>
												<div
													class="special-suggest-item__slider-pagination card-product__slider-pagination swiper-pagination">
												</div>
											</div>
											<div class="special-suggest-item__info card-product__info">
												<div class="special-suggest-item__price card-product__price">
													<span class="new">44 990 ₽</span>
													<span class="old">64 990 ₽</span>
												</div>
												<div class="special-suggest-item__name card-product__name">iPhone SE 128
													ГБ,
													(product) red</div>
												<div
													class="special-suggest-item__installment card-product__installment">
													от
													5 600 ₽ в мес.</div>
												<div class="special-suggest-item__row card-product__row">
													<div class="special-suggest-item__raiting card-product__raiting">
														<div class="card-product__raiting-icon">
															<svg width="13" height="13" viewBox="0 0 13 13" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M5.92937 0.756229C6.10898 0.203442 6.89102 0.203444 7.07063 0.75623L8.1614 4.11327C8.24173 4.36049 8.4721 4.52786 8.73204 4.52786H12.2618C12.8431 4.52786 13.0847 5.27163 12.6145 5.61327L9.75884 7.68804C9.54855 7.84083 9.46055 8.11165 9.54088 8.35886L10.6316 11.7159C10.8113 12.2687 10.1786 12.7284 9.70834 12.3867L6.85267 10.312C6.64238 10.1592 6.35762 10.1592 6.14733 10.312L3.29166 12.3867C2.82143 12.7284 2.18874 12.2687 2.36835 11.7159L3.45912 8.35886C3.53945 8.11165 3.45145 7.84083 3.24116 7.68804L0.385485 5.61327C-0.0847429 5.27163 0.156924 4.52786 0.738158 4.52786H4.26796C4.5279 4.52786 4.75827 4.36049 4.8386 4.11327L5.92937 0.756229Z"
																	fill="#D2232A" />
															</svg>
														</div>
														<div class="card-product__raiting-count">4,5</div>
													</div>
													<div class="card-product__reviews">125 отзывов</div>
												</div>
											</div>
											<div class="special-suggest-item__btn card-product__btn">
												<span class="btn add-product-basket__js">Добавить в корзину</span>
											</div>
										</div>
									</div>
									<div class="special-suggest__item swiper-slide special-suggest-item card-product">
										<div class="special-suggest-item__body card-product__body">
											<div class="special-suggest-item__marks card-product__marks">
												<div class="special-suggest-item__mark card-product__mark blue">
													Рассрочка
													0-0-33
												</div>
												<div class="special-suggest-item__mark card-product__mark red">Новинка
												</div>
											</div>
											<div class="special-suggest-item__icons card-product__icons">
												<div class="special-suggest-item__icon card-product__icon comparisons">
													<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M15 20V10M8 20V0M1 20V5" stroke="#333333"
															stroke-width="2" stroke-linejoin="bevel" />
													</svg>
												</div>
												<div
													class="special-suggest-item__icon card-product__icon favorites icon-product-favorites add-favorites-product__js">
													<svg width="20" height="19" viewBox="0 0 20 19" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M1 6.5C1 1.39295 7.75 -0.460562 10 4.18C12.25 -0.460562 19 1.39301 19 6.50006C19 11.6071 10 17.5209 10 17.5209C10 17.5209 1 11.607 1 6.5Z"
															fill="transparent" stroke="#333333" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="bevel" />
													</svg>
												</div>
											</div>
											<div class="special-suggest-item__slider card-product__slider _swiper">
												<div
													class="special-suggest-item__wrapper card-product__wrapper swiper-wrapper">
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/2.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/2.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/2.jpg" alt="">
														</picture>
													</div>
												</div>
												<div
													class="special-suggest-item__slider-pagination card-product__slider-pagination swiper-pagination">
												</div>
											</div>
											<div class="special-suggest-item__info card-product__info">
												<div class="special-suggest-item__price card-product__price">
													<span class="new">44 990 ₽</span>
													<span class="old">64 990 ₽</span>
												</div>
												<div class="special-suggest-item__name card-product__name">iPhone SE 128
													ГБ,
													(product) red</div>
												<div
													class="special-suggest-item__installment card-product__installment">
													от
													5 600 ₽ в мес.</div>
												<div class="special-suggest-item__row card-product__row">
													<div class="special-suggest-item__raiting card-product__raiting">
														<div class="card-product__raiting-icon">
															<svg width="13" height="13" viewBox="0 0 13 13" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M5.92937 0.756229C6.10898 0.203442 6.89102 0.203444 7.07063 0.75623L8.1614 4.11327C8.24173 4.36049 8.4721 4.52786 8.73204 4.52786H12.2618C12.8431 4.52786 13.0847 5.27163 12.6145 5.61327L9.75884 7.68804C9.54855 7.84083 9.46055 8.11165 9.54088 8.35886L10.6316 11.7159C10.8113 12.2687 10.1786 12.7284 9.70834 12.3867L6.85267 10.312C6.64238 10.1592 6.35762 10.1592 6.14733 10.312L3.29166 12.3867C2.82143 12.7284 2.18874 12.2687 2.36835 11.7159L3.45912 8.35886C3.53945 8.11165 3.45145 7.84083 3.24116 7.68804L0.385485 5.61327C-0.0847429 5.27163 0.156924 4.52786 0.738158 4.52786H4.26796C4.5279 4.52786 4.75827 4.36049 4.8386 4.11327L5.92937 0.756229Z"
																	fill="#D2232A" />
															</svg>
														</div>
														<div class="card-product__raiting-count">4,5</div>
													</div>
													<div class="card-product__reviews">125 отзывов</div>
												</div>
											</div>
											<div class="special-suggest-item__btn card-product__btn">
												<span class="btn add-product-basket__js">Добавить в корзину</span>
											</div>
										</div>
									</div>
									<div class="special-suggest__item swiper-slide special-suggest-item card-product">
										<div class="special-suggest-item__body card-product__body">
											<div class="special-suggest-item__marks card-product__marks">
												<div class="special-suggest-item__mark card-product__mark blue">
													Рассрочка
													0-0-33
												</div>
												<div class="special-suggest-item__mark card-product__mark red">Новинка
												</div>
											</div>
											<div class="special-suggest-item__icons card-product__icons">
												<div class="special-suggest-item__icon card-product__icon comparisons">
													<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M15 20V10M8 20V0M1 20V5" stroke="#333333"
															stroke-width="2" stroke-linejoin="bevel" />
													</svg>
												</div>
												<div
													class="special-suggest-item__icon card-product__icon favorites icon-product-favorites add-favorites-product__js">
													<svg width="20" height="19" viewBox="0 0 20 19" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M1 6.5C1 1.39295 7.75 -0.460562 10 4.18C12.25 -0.460562 19 1.39301 19 6.50006C19 11.6071 10 17.5209 10 17.5209C10 17.5209 1 11.607 1 6.5Z"
															fill="transparent" stroke="#333333" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="bevel" />
													</svg>

												</div>
											</div>
											<div class="special-suggest-item__slider card-product__slider _swiper">
												<div
													class="special-suggest-item__wrapper card-product__wrapper swiper-wrapper">
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/1.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/1.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/1.jpg" alt="">
														</picture>
													</div>
												</div>
												<div
													class="special-suggest-item__slider-pagination card-product__slider-pagination swiper-pagination">
												</div>
											</div>
											<div class="special-suggest-item__info card-product__info">
												<div class="special-suggest-item__price card-product__price">
													<span class="new">44 990 ₽</span>
													<span class="old">64 990 ₽</span>
												</div>
												<div class="special-suggest-item__name card-product__name">iPhone SE 128
													ГБ,
													(product) red</div>
												<div
													class="special-suggest-item__installment card-product__installment">
													от
													5 600 ₽ в мес.</div>
												<div class="special-suggest-item__row card-product__row">
													<div class="special-suggest-item__raiting card-product__raiting">
														<div class="card-product__raiting-icon">
															<svg width="13" height="13" viewBox="0 0 13 13" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M5.92937 0.756229C6.10898 0.203442 6.89102 0.203444 7.07063 0.75623L8.1614 4.11327C8.24173 4.36049 8.4721 4.52786 8.73204 4.52786H12.2618C12.8431 4.52786 13.0847 5.27163 12.6145 5.61327L9.75884 7.68804C9.54855 7.84083 9.46055 8.11165 9.54088 8.35886L10.6316 11.7159C10.8113 12.2687 10.1786 12.7284 9.70834 12.3867L6.85267 10.312C6.64238 10.1592 6.35762 10.1592 6.14733 10.312L3.29166 12.3867C2.82143 12.7284 2.18874 12.2687 2.36835 11.7159L3.45912 8.35886C3.53945 8.11165 3.45145 7.84083 3.24116 7.68804L0.385485 5.61327C-0.0847429 5.27163 0.156924 4.52786 0.738158 4.52786H4.26796C4.5279 4.52786 4.75827 4.36049 4.8386 4.11327L5.92937 0.756229Z"
																	fill="#D2232A" />
															</svg>
														</div>
														<div class="card-product__raiting-count">4,5</div>
													</div>
													<div class="card-product__reviews">125 отзывов</div>
												</div>
											</div>
											<div class="special-suggest-item__btn card-product__btn">
												<span class="btn add-product-basket__js">Добавить в корзину</span>
											</div>
										</div>
									</div>
									<div class="special-suggest__item swiper-slide special-suggest-item card-product">
										<div class="special-suggest-item__body card-product__body">
											<div class="special-suggest-item__marks card-product__marks">
												<div class="special-suggest-item__mark card-product__mark blue">
													Рассрочка
													0-0-33
												</div>
												<div class="special-suggest-item__mark card-product__mark red">Новинка
												</div>
											</div>
											<div class="special-suggest-item__icons card-product__icons">
												<div class="special-suggest-item__icon card-product__icon comparisons">
													<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M15 20V10M8 20V0M1 20V5" stroke="#333333"
															stroke-width="2" stroke-linejoin="bevel" />
													</svg>
												</div>
												<div
													class="special-suggest-item__icon card-product__icon favorites icon-product-favorites add-favorites-product__js">
													<svg width="20" height="19" viewBox="0 0 20 19" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M1 6.5C1 1.39295 7.75 -0.460562 10 4.18C12.25 -0.460562 19 1.39301 19 6.50006C19 11.6071 10 17.5209 10 17.5209C10 17.5209 1 11.607 1 6.5Z"
															fill="transparent" stroke="#333333" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="bevel" />
													</svg>
												</div>
											</div>
											<div class="special-suggest-item__slider card-product__slider _swiper">
												<div
													class="special-suggest-item__wrapper card-product__wrapper swiper-wrapper">
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/2.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/2.jpg" alt="">
														</picture>
													</div>
													<div
														class="special-suggest-item__img card-product__img swiper-slide">
														<picture>
															<img src="/img/products/2.jpg" alt="">
														</picture>
													</div>
												</div>
												<div
													class="special-suggest-item__slider-pagination card-product__slider-pagination swiper-pagination">
												</div>
											</div>
											<div class="special-suggest-item__info card-product__info">
												<div class="special-suggest-item__price card-product__price">
													<span class="new">44 990 ₽</span>
													<span class="old">64 990 ₽</span>
												</div>
												<div class="special-suggest-item__name card-product__name">iPhone SE 128
													ГБ,
													(product) red</div>
												<div
													class="special-suggest-item__installment card-product__installment">
													от
													5 600 ₽ в мес.</div>
												<div class="special-suggest-item__row card-product__row">
													<div class="special-suggest-item__raiting card-product__raiting">
														<div class="card-product__raiting-icon">
															<svg width="13" height="13" viewBox="0 0 13 13" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M5.92937 0.756229C6.10898 0.203442 6.89102 0.203444 7.07063 0.75623L8.1614 4.11327C8.24173 4.36049 8.4721 4.52786 8.73204 4.52786H12.2618C12.8431 4.52786 13.0847 5.27163 12.6145 5.61327L9.75884 7.68804C9.54855 7.84083 9.46055 8.11165 9.54088 8.35886L10.6316 11.7159C10.8113 12.2687 10.1786 12.7284 9.70834 12.3867L6.85267 10.312C6.64238 10.1592 6.35762 10.1592 6.14733 10.312L3.29166 12.3867C2.82143 12.7284 2.18874 12.2687 2.36835 11.7159L3.45912 8.35886C3.53945 8.11165 3.45145 7.84083 3.24116 7.68804L0.385485 5.61327C-0.0847429 5.27163 0.156924 4.52786 0.738158 4.52786H4.26796C4.5279 4.52786 4.75827 4.36049 4.8386 4.11327L5.92937 0.756229Z"
																	fill="#D2232A" />
															</svg>
														</div>
														<div class="card-product__raiting-count">4,5</div>
													</div>
													<div class="card-product__reviews">125 отзывов</div>
												</div>
											</div>
											<div class="special-suggest-item__btn card-product__btn">
												<span class="btn add-product-basket__js">Добавить в корзину</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="special-suggest__slider-scrollbar slider-scrollbar swiper-scrollbar"></div>
							<div class="special-suggest__slider-arrows slider-arrows black">
								<div class="special-suggest__slider-arrow slider-arrows__item left">
									<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M9 1L1 9L9 17" stroke="#EBEBEB" />
									</svg>
								</div>
								<div class="special-suggest__slider-arrow slider-arrows__item right">
									<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1L9 9L1 17" stroke="#EBEBEB" />
									</svg>
								</div>
							</div>
						</div>
						<div class="special-suggest__btns">
							<div class="special-suggest__btn">
								<span class="btn-border look-more-products__js" data-offset="0" data-limit="15"
									data-total="200">Смотреть ещё 15 предложений</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="main-accessories">
				<div class="main-accessories__container container">
					<div class="main-accessories__slider _swiper">
						<div class="main-accessories__wrapper swiper-wrapper">
							<div class="main-accessories__item swiper-slide main-accessories-item">
								<div class="main-accessories-item__body">
									<div class="main-accessories-item__info">
										<div class="main-accessories-item__name">
											Защитные стекла для Apple
										</div>
										<div class="main-accessories-item__desc">
											<p>
												Надежная защита от царапин
											</p>
										</div>
										<div class="main-accessories-item__more">
											<a href="#" class="link-arrow">
												<span>Подробнее</span>
												<svg width="8" height="13" viewBox="0 0 8 13" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path d="M1 1.5L6 6.5L1 11.5" stroke="#6A1414" stroke-width="1.5" />
												</svg>
											</a>
										</div>
									</div>
									<div class="main-accessories-item__img">
										<picture>
											<img src="/img/accessories/1-min.jpg" alt="">
										</picture>
									</div>
								</div>
							</div>
							<div class="main-accessories__item swiper-slide main-accessories-item">
								<div class="main-accessories-item__body">
									<div class="main-accessories-item__info">
										<div class="main-accessories-item__name">
											Зарядные устройства
										</div>
										<div class="main-accessories-item__desc">
											<p>
												Заряжайте ваши устройства дома, в машине и на работе
											</p>
										</div>
										<div class="main-accessories-item__more">
											<a href="#" class="link-arrow">
												<span>Подробнее</span>
												<svg width="8" height="13" viewBox="0 0 8 13" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path d="M1 1.5L6 6.5L1 11.5" stroke="#6A1414" stroke-width="1.5" />
												</svg>
											</a>
										</div>
									</div>
									<div class="main-accessories-item__img">
										<picture>
											<img src="/img/accessories/2-min.jpg" alt="">
										</picture>
									</div>
								</div>
							</div>
							<div class="main-accessories__item swiper-slide main-accessories-item">
								<div class="main-accessories-item__body">
									<div class="main-accessories-item__info">
										<div class="main-accessories-item__name">
											Чехлы для Apple
										</div>
										<div class="main-accessories-item__desc">
											<p>
												Добавьте новых красок вашему устройству
											</p>
										</div>
										<div class="main-accessories-item__more">
											<a href="#" class="link-arrow">
												<span>Подробнее</span>
												<svg width="8" height="13" viewBox="0 0 8 13" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path d="M1 1.5L6 6.5L1 11.5" stroke="#6A1414" stroke-width="1.5" />
												</svg>
											</a>
										</div>
									</div>
									<div class="main-accessories-item__img">
										<picture>
											<img src="/img/accessories/3-min.jpg" alt="">
										</picture>
									</div>
								</div>
							</div>
						</div>
						<div class="main-accessories__slider-pagination swiper-pagination"></div>
					</div>
				</div>
			</section>
			<section class="pro-special-suggest">
				<div class="pro-special-suggest__container container">
					<div class="pro-special-suggest__slider _swiper">
						<div class="pro-special-suggest__slider-body">
							<div class="pro-special-suggest__wrapper swiper-wrapper">
								<div class="pro-special-suggest__item swiper-slide pro-special-suggest-item">
									<div class="pro-special-suggest-item__body">
										<div class="pro-special-suggest-item__left-block">
											<div class="pro-special-suggest-item__title">Выгода 10% на ноутбуки Mac для
												студентов и преподавателей</div>
											<div class="pro-special-suggest-item__date">до 02.05.2035</div>
											<div class="pro-special-suggest-item__btn"
												data-da=".pro-special-suggest-item__right-block, 1023, last">
												<a href="#" class="btn-arrow">
													<span>Все товары по акции</span>
													<svg width="8" height="13" viewBox="0 0 8 13" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M1.5 1.5L6.5 6.5L1.5 11.5" stroke="#333333"
															stroke-width="1.5" />
													</svg>
												</a>
											</div>
										</div>
										<div class="pro-special-suggest-item__right-block">
											<div class="pro-special-suggest-item__products">
												<div
													class="pro-special-suggest-item__product pro-special-suggest-product">
													<a href="#" class="pro-special-suggest-product__body">
														<div class="pro-special-suggest-product__img">
															<picture>
																<img src="/img/special-products/mac-air-min.png" alt="">
															</picture>
														</div>
														<div class="pro-special-suggest-product__info">
															<div class="pro-special-suggest-product__name">
																MacBook Air 13"
															</div>
															<div class="pro-special-suggest-product__characteristics">
																<p>Dual-Core i5 1,6 ГГц, 8 ГБ, 128 ГБ SSD, «Золотой»</p>
															</div>
															<div class="pro-special-suggest-product__price">
																<span>от 80 991 ₽</span>
															</div>
														</div>
													</a>
												</div>
												<div
													class="pro-special-suggest-item__product pro-special-suggest-product">
													<a href="#" class="pro-special-suggest-product__body">
														<div class="pro-special-suggest-product__img">
															<picture>
																<img src="/img/special-products/mac-pro-min.png" alt="">
															</picture>
														</div>
														<div class="pro-special-suggest-product__info">
															<div class="pro-special-suggest-product__name">
																MacBook Pro 13"
															</div>
															<div class="pro-special-suggest-product__characteristics">
																<p>i5 1.4 ГГц, 8 ГБ, 256 ГБ SSD, «Серебристый»</p>
															</div>
															<div class="pro-special-suggest-product__price">
																<span>от 107 991 ₽</span>
															</div>
														</div>
													</a>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="pro-special-suggest__item swiper-slide pro-special-suggest-item">
									<div class="pro-special-suggest-item__body">
										<div class="pro-special-suggest-item__left-block">
											<div class="pro-special-suggest-item__title">Выгода 10% на ноутбуки Mac для
												студентов и преподавателей</div>
											<div class="pro-special-suggest-item__date">до 02.05.2035</div>
											<div class="pro-special-suggest-item__btn"
												data-da=".pro-special-suggest-item__right-block, 1023, last">
												<a href="#" class="btn-arrow">
													<span>Все товары по акции</span>
													<svg width="8" height="13" viewBox="0 0 8 13" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M1.5 1.5L6.5 6.5L1.5 11.5" stroke="#333333"
															stroke-width="1.5" />
													</svg>
												</a>
											</div>
										</div>
										<div class="pro-special-suggest-item__right-block">
											<div class="pro-special-suggest-item__products">
												<div
													class="pro-special-suggest-item__product pro-special-suggest-product">
													<a href="#" class="pro-special-suggest-product__body">
														<div class="pro-special-suggest-product__img">
															<picture>
																<img src="/img/special-products/mac-air-min.png" alt="">
															</picture>
														</div>
														<div class="pro-special-suggest-product__info">
															<div class="pro-special-suggest-product__name">
																MacBook Air 13"
															</div>
															<div class="pro-special-suggest-product__characteristics">
																<p>Dual-Core i5 1,6 ГГц, 8 ГБ, 128 ГБ SSD, «Золотой»</p>
															</div>
															<div class="pro-special-suggest-product__price">
																<span>от 80 991 ₽</span>
															</div>
														</div>
													</a>
												</div>
												<div
													class="pro-special-suggest-item__product pro-special-suggest-product">
													<a href="#" class="pro-special-suggest-product__body">
														<div class="pro-special-suggest-product__img">
															<picture>
																<img src="/img/special-products/mac-pro-min.png" alt="">
															</picture>
														</div>
														<div class="pro-special-suggest-product__info">
															<div class="pro-special-suggest-product__name">
																MacBook Pro 13"
															</div>
															<div class="pro-special-suggest-product__characteristics">
																<p>i5 1.4 ГГц, 8 ГБ, 256 ГБ SSD, «Серебристый»</p>
															</div>
															<div class="pro-special-suggest-product__price">
																<span>от 107 991 ₽</span>
															</div>
														</div>
													</a>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pro-special-suggest__slider-arrows slider-arrows">
							<div class="pro-special-suggest__slider-arrow slider-arrows__item left swiper-button-disabled"
								tabindex="-1" role="button" aria-label="Previous slide"
								aria-controls="swiper-wrapper-a0c54f6722517532" aria-disabled="true">
								<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M9 1L1 9L9 17" stroke="#EBEBEB"></path>
								</svg>
							</div>
							<div class="pro-special-suggest__slider-arrow slider-arrows__item right" tabindex="0"
								role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a0c54f6722517532"
								aria-disabled="false">
								<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M1 1L9 9L1 17" stroke="#EBEBEB"></path>
								</svg>
							</div>
						</div>
						<div class="pro-special-suggest__slider-pagination swiper-pagination"></div>
					</div>
				</div>
			</section>
			<?php include_once "inc/main-gadjets.php"; ?>
		</div>

		<?php include_once "inc/footer-after.php"; ?>
	</div>

	<?php include_once "inc/script.php"; ?>
</body>

</html>