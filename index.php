<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<link rel="stylesheet" href="/css/style.css">
	<title>Document</title>
</head>

<body>
	<div class="page">
		<?php include_once "inc/header.php"; ?>
		<main class="main main-page">
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
						<div class="our-news__slider-arrows slider-arrows center black">
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
			<section class="special-suggest card-products">
				<div class="special-suggest__container card-products__container container">
					<h2 class="special-suggest__title card-products__title">Специальные предложения</h2>
					<div class="special-suggest__content card-products__content ajax-cards-products">
						<div class="special-suggest__slider card-products__slider _swiper">
							<div class="special-suggest__slider-body card-products__slider-body">
								<div class="special-suggest__wrapper card-products__slider-wrapper swiper-wrapper">
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
							<div class="special-suggest__slider-scrollbar card-products__slider-scrollbar slider-scrollbar swiper-scrollbar"></div>
							<div class="special-suggest__slider-arrows card-products__slider-arrows center slider-arrows black">
								<div class="special-suggest__slider-arrow card-products__slider-arrow slider-arrows__item left">
									<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M9 1L1 9L9 17" stroke="#EBEBEB" />
									</svg>
								</div>
								<div class="special-suggest__slider-arrow card-products__slider-arrow slider-arrows__item right">
									<svg width="10" height="18" viewBox="0 0 10 18" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1L9 9L1 17" stroke="#EBEBEB" />
									</svg>
								</div>
							</div>
						</div>
						<div class="special-suggest__btns card-products__btns">
							<div class="special-suggest__btn card-products__btn">
								<span class="btn-border look-more-products__js" data-offset="0" data-limit="15"
									data-total="200">Смотреть ещё 15 предложений</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php include_once "inc/main-accessories.php"; ?>
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
			<section class="promocode-product">
				<div class="promocode-product__container container">
					<div class="promocode-product__info">
						<h2 class="promocode-product__title">
							<span class="desktop">Промокод 10% на первую покупку за подписку</span>
							<span class="mob">Скидка 10% на первую покупку за подписку</span>
						</h2>
						<div class="promocode-product__text">
							<p>Подпишитесь и узнавайте о новинках и специальных предложениях первыми</p>
						</div>
						<div class="promocode-product__form">
							<form class="promocode-product-form">
								<div class="promocode-product-form__row">
									<div class="promocode-product-form__item form-item">
										<input type="email"
											class="promocode-product-form__input form-input form-input__js"
											placeholder="Введите email"
											pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
									</div>
									<div class="promocode-product-form__btn">
										<button class="btn-arrow form-btn form-btn__js">
											<span>Подписаться</span>
											<svg width="8" height="13" viewBox="0 0 8 13" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M1 1.5L6 6.5L1 11.5" stroke="#EBEBEB" stroke-width="1.5" />
											</svg>
										</button>
									</div>
								</div>
								<div class="promocode-product-form__politics politics-text">
									<p>Нажимая кнопку, я даю согласие на <a href="#" target="_blank">обработку
											персональных данных</a></p>
								</div>
							</form>
						</div>
					</div>
					<div class="promocode-product__img">
						<picture>
							<img src="/img/promocode-min.jpg" alt="">
						</picture>
					</div>
				</div>
			</section>
			<section class="bonus-programm">
				<div class="bonus-programm__container container">
					<h2 class="bonus-programm__title">Бонусная программа</h2>
					<div class="bonus-programm__slider _swiper">
						<div class="bonus-programm__wrapper swiper-wrapper">
							<div class="bonus-programm__item swiper-slide bonus-programm-item item-1">
								<a href="#" class="bonus-programm-item__body">
									<div class="bonus-programm-item__info">
										<div class="bonus-programm-item__name">Мобильное приложение iCenter Team</div>
										<div class="bonus-programm-item__text">
											<p>
												Будьте в курсе о накопленных бонусах и доступных привилегиях.
												Отслеживайте
												историю покупок и оставайтесь на связи
											</p>
										</div>
									</div>
									<div class="bonus-programm-item__img">
										<picture>
											<img src="/img/bonus-programm/bonus-programm-1-min.png" alt="">
										</picture>
									</div>
								</a>
							</div>
							<div class="bonus-programm__item swiper-slide bonus-programm-item item-2">
								<a href="#" class="bonus-programm-item__body">
									<div class="bonus-programm-item__info">
										<div class="bonus-programm-item__name">
											Статусы участников
										</div>
										<div class="bonus-programm-item__text">
											<p>Каждая покупка с приложением
												iCenter Team — это шаг к новому статусу,
												новым привилегиям, большим возможностям</p>
										</div>
									</div>
									<div class="bonus-programm-item__img">
										<picture>
											<img src="/img/bonus-programm/bonus-programm-2-min.png" alt="">
										</picture>
									</div>
								</a>
							</div>
							<div class="bonus-programm__item swiper-slide bonus-programm-item item-3">
								<a href="#" class="bonus-programm-item__body">
									<div class="bonus-programm-item__info">
										<div class="bonus-programm-item__name">
											Бонусная программа
										</div>
										<div class="bonus-programm-item__text">
											<p>
												Количество начисляемых Бонусов рассчитывается как 5% от стоимости
												товаров в чеке
											</p>
										</div>
									</div>
									<div class="bonus-programm-item__img">
										<picture>
											<img src="/img/bonus-programm/bonus-programm-3-min.png" alt="">
										</picture>
									</div>
								</a>
							</div>
						</div>
						<div class="bonus-programm__pagination slider-pagination swiper-pagination"></div>
					</div>
					<div class="bonus-programm__btns">
						<div class="bonus-programm__btn">
							<a href="#" class="btn-border">Узнать подробнее</a>
						</div>
					</div>
				</div>
			</section>
			<section class="our-benefits">
				<div class="our-benefits__container container">
					<h2 class="our-benefits__title">Почему iCenter?</h2>
					<div class="our-benefits__list">
						<div class="our-benefits__item our-benefits-item">
							<div class="our-benefits-item__icon">
								<svg width="50" height="50" viewBox="0 0 50 50" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_5144_36261)">
										<path
											d="M18.1749 1.08398V0.0839844C17.6226 0.0839844 17.1749 0.5317 17.1749 1.08398L18.1749 1.08398ZM31.8274 1.08398H32.8274C32.8274 0.5317 32.3797 0.0839844 31.8274 0.0839844V1.08398ZM18.1749 18.1488V19.1488C18.7272 19.1488 19.1749 18.7011 19.1749 18.1488H18.1749ZM1.1084 18.1488V17.1488C0.556114 17.1488 0.108398 17.5965 0.108398 18.1488H1.1084ZM1.1084 31.8013H0.108398C0.108398 32.3536 0.556114 32.8013 1.1084 32.8013L1.1084 31.8013ZM18.1749 31.8013H19.1749C19.1749 31.249 18.7272 30.8013 18.1749 30.8013V31.8013ZM18.1749 48.8671H17.1749C17.1749 49.4194 17.6226 49.8671 18.1749 49.8671V48.8671ZM31.8274 48.8671V49.8671C32.3797 49.8671 32.8274 49.4194 32.8274 48.8671H31.8274ZM31.8274 31.8013V30.8013C31.2751 30.8013 30.8274 31.249 30.8274 31.8013H31.8274ZM48.8916 31.8013V32.8013C49.4438 32.8013 49.8916 32.3536 49.8916 31.8013H48.8916ZM48.8916 18.1488H49.8916C49.8916 17.5965 49.4438 17.1488 48.8916 17.1488V18.1488ZM31.8274 18.1488H30.8274C30.8274 18.7011 31.2751 19.1488 31.8274 19.1488V18.1488ZM18.1749 2.08398H31.8274V0.0839844H18.1749V2.08398ZM19.1749 18.1488V1.08398H17.1749V18.1488H19.1749ZM1.1084 19.1488H18.1749V17.1488H1.1084V19.1488ZM2.1084 31.8013V18.1488H0.108398V31.8013H2.1084ZM18.1749 30.8013H1.1084V32.8013H18.1749V30.8013ZM19.1749 48.8671V31.8013H17.1749V48.8671H19.1749ZM31.8274 47.8671H18.1749V49.8671H31.8274V47.8671ZM30.8274 31.8013V48.8671H32.8274V31.8013H30.8274ZM48.8916 30.8013H31.8274V32.8013H48.8916V30.8013ZM47.8916 18.1488V31.8013H49.8916V18.1488H47.8916ZM31.8274 19.1488H48.8916V17.1488H31.8274V19.1488ZM30.8274 1.08398V18.1488H32.8274V1.08398H30.8274Z"
											fill="#666666" />
									</g>
									<defs>
										<clipPath id="clip0_5144_36261">
											<rect width="50" height="50" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</div>
							<div class="our-benefits-item__name">Дополнительный год гарантии</div>
							<div class="our-benefits-item__desc">
								На всю технику Apple, аксессуары и бытовую технику
							</div>

						</div>
						<div class="our-benefits__item our-benefits-item">
							<div class="our-benefits-item__icon">
								<svg width="50" height="50" viewBox="0 0 50 50" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_5144_36267)">
										<rect x="6.05371" y="18.0352" width="39.3164" height="26.5083" rx="5"
											transform="rotate(-11.9261 6.05371 18.0352)" stroke="#666666"
											stroke-width="2" />
										<path
											d="M4.9784 12.3539C1.73622 13.0386 -0.336968 16.2221 0.347808 19.4642L3.75924 35.6162C4.44402 38.8584 7.62745 40.9316 10.8696 40.2468L10.4563 38.29C8.29488 38.7465 6.17259 37.3644 5.71607 35.2029L2.30464 19.0509C1.84812 16.8895 3.23025 14.7672 5.3917 14.3107L34.0753 8.25246C36.2368 7.79594 38.3591 9.17807 38.8156 11.3395L40.7724 10.9262C40.0876 7.68404 36.9042 5.61085 33.662 6.29563L4.9784 12.3539Z"
											fill="#666666" />
										<path
											d="M32.3535 22.6065C32.8217 22.609 33.2626 22.2785 33.2889 21.8111C33.3087 21.4574 33.0798 21.1373 32.7264 21.1123C32.2726 21.08 31.6526 21.1045 30.9206 21.258C28.0172 21.8664 26.2523 24.2566 26.9242 27.4627C27.5446 30.4233 29.7824 31.9746 32.7985 31.3425C33.6007 31.1744 34.2621 30.9241 34.7106 30.6853C34.9912 30.5359 35.0741 30.195 34.9488 29.9028C34.7641 29.4721 34.2102 29.3185 33.7776 29.4985C33.4664 29.6281 33.1193 29.7375 32.7717 29.8103C30.6858 30.2475 29.1721 29.1325 28.7241 26.995C28.2338 24.6554 29.3688 23.121 31.2997 22.7163C31.6835 22.6359 32.036 22.6048 32.3535 22.6065Z"
											fill="#666666" />
										<path
											d="M24.1829 32.1413C24.2945 32.674 24.8168 33.0153 25.3495 32.9037C25.8822 32.792 26.2235 32.2697 26.1119 31.737L25.0675 26.7538C24.9314 26.1041 24.2048 25.7722 23.6245 26.0945C23.2469 26.3042 23.0499 26.7354 23.1385 27.1581L24.1829 32.1413ZM24.4248 23.7683C24.2924 23.2065 23.8387 22.8516 23.2517 22.9746C22.6785 23.0947 22.3774 23.6078 22.4958 24.1726C22.611 24.7224 23.0787 25.0744 23.6519 24.9543C24.253 24.8283 24.54 24.3182 24.4248 23.7683Z"
											fill="#666666" />
									</g>
									<defs>
										<clipPath id="clip0_5144_36267">
											<rect width="50" height="50" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</div>
							<div class="our-benefits-item__name">Бонусная система</div>
							<div class="our-benefits-item__desc">
								Оплачивайте покупки накопленными бонусами
							</div>
						</div>
						<div class="our-benefits__item our-benefits-item">
							<div class="our-benefits-item__icon">
								<svg width="50" height="50" viewBox="0 0 50 50" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M35.9766 15.4985L34.8593 15.1412L34.0564 14.8845C33.8523 14.8192 33.6745 14.69 33.5493 14.516L25.8117 3.76111C25.4127 3.20646 24.5873 3.20646 24.1882 3.76111L16.4507 14.516C16.3255 14.69 16.1477 14.8192 15.9435 14.8845L3.32392 18.9199C2.6731 19.128 2.41803 19.913 2.82223 20.4639L10.6597 31.1463C10.7865 31.3191 10.8544 31.5281 10.8534 31.7425L10.7917 44.9914C10.7885 45.6747 11.4563 46.1598 12.1051 45.9457L24.6865 41.7928C24.8901 41.7256 25.1098 41.7256 25.3134 41.7928L37.8948 45.9457C38.5437 46.1598 39.2114 45.6747 39.2082 44.9914L39.1465 31.7425C39.1455 31.5281 39.2134 31.3191 39.3402 31.1463L47.1777 20.4639C47.5819 19.913 47.3268 19.128 46.676 18.9199L44.1206 18.1028"
										stroke="#666666" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round" />
									<path d="M17.9307 25.6592L24.75 32.4781L44.1216 13.1064" stroke="#666666"
										stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</div>
							<div class="our-benefits-item__name">Авторизованный сервисный центр</div>
							<div class="our-benefits-item__desc">
								Единственный официальный партнер Apple в Калининграде
							</div>
						</div>
						<div class="our-benefits__item our-benefits-item">
							<div class="our-benefits-item__icon">
								<svg width="50" height="50" viewBox="0 0 50 50" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M8.2531 10.2508C8.2531 6.50527 11.2894 3.46892 15.035 3.46892H27.6603V10.6484C27.6603 13.3237 29.8291 15.4926 32.5044 15.4926H39.1421V28.4491L41.0798 29.426V14.5237C41.0798 14.2745 40.9837 14.0349 40.8116 13.8546L29.3298 1.83098C29.147 1.63955 28.8938 1.53125 28.6291 1.53125H15.035C10.2193 1.53125 6.31543 5.43512 6.31543 10.2508V35.9309C6.31543 40.7465 10.2193 44.6504 15.035 44.6504H31.0323L30.2386 42.7127H15.035C11.2894 42.7127 8.2531 39.6764 8.2531 35.9309V10.2508ZM37.8461 13.5549L29.5979 4.91748V10.6484C29.5979 12.2536 30.8992 13.5549 32.5044 13.5549H37.8461Z"
										fill="#666666" />
									<path
										d="M28.1768 30.9919L36.4303 27.1973L44.6839 30.9919V35.9295C44.6839 40.1783 42.6076 44.1589 39.1233 46.5904L36.4303 48.4696L33.7373 46.5904C30.253 44.1589 28.1768 40.1783 28.1768 35.9295V30.9919Z"
										stroke="#666666" stroke-width="2" stroke-linejoin="round" />
								</svg>
							</div>
							<div class="our-benefits-item__name">Страхование техники Apple</div>
							<div class="our-benefits-item__desc">
								Ваше устройство и бюджет под надежной защитой
							</div>
						</div>
						<div class="our-benefits__item our-benefits-item">
							<div class="our-benefits-item__icon">
								<svg width="50" height="50" viewBox="0 0 50 50" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M36.6993 32.7064L31.7792 42.8082C29.8445 46.7804 25.056 48.4321 21.0839 46.4974L9.96292 41.0809C5.99074 39.1462 4.33901 34.3578 6.27369 30.3856L9.04005 24.7059M12.3758 17.857L17.1278 8.10047C19.0625 4.12829 23.8509 2.47657 27.8231 4.41124L38.9441 9.82777C42.9162 11.7624 44.568 16.5509 42.6333 20.5231L40.596 24.7059"
										stroke="#666666" stroke-width="2" stroke-linecap="round" />
									<path
										d="M18.8669 25.4529L6.33833 19.6194C3.02519 18.0767 1.58993 14.1403 3.13258 10.8272V10.8272C4.67524 7.51406 8.61164 6.07879 11.9248 7.62145L13.4766 8.34402"
										stroke="#666666" stroke-width="2" stroke-linecap="round" />
									<path d="M17.019 21.4541L18.9763 25.4909" stroke="#666666" stroke-width="2"
										stroke-linecap="round" />
									<path d="M14.6333 26.6104L18.9779 25.4918" stroke="#666666" stroke-width="2"
										stroke-linecap="round" />
									<path
										d="M31.1346 24.6311L43.6631 30.4646C46.9763 32.0072 48.4115 35.9436 46.8689 39.2568V39.2568C45.3262 42.5699 41.3898 44.0052 38.0767 42.4625L35.9884 41.4902"
										stroke="#666666" stroke-width="2" stroke-linecap="round" />
									<path d="M32.9824 28.6299L31.0252 24.5931" stroke="#666666" stroke-width="2"
										stroke-linecap="round" />
									<path d="M35.3682 23.4736L31.0236 24.5922" stroke="#666666" stroke-width="2"
										stroke-linecap="round" />
								</svg>
							</div>
							<div class="our-benefits-item__name">Программа trade-in</div>
							<div class="our-benefits-item__desc">
								Обменивайте старое устройство на новое
							</div>
						</div>
						<div class="our-benefits__item our-benefits-item">
							<div class="our-benefits-item__icon">
								<svg width="50" height="50" viewBox="0 0 50 50" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M24.9992 45.018H13.9834V39.1369C13.9834 35.0519 16.1083 31.2611 19.5929 29.1293L20.7356 28.4302C21.9772 27.6707 22.7342 26.32 22.7342 24.8646V24.8646C22.7342 23.4947 22.0631 22.2118 20.9377 21.4307L19.5929 20.4973C16.0792 18.0583 13.9834 14.0525 13.9834 9.77523V4.86719H24.9992"
										stroke="#666666" stroke-width="2" stroke-linejoin="round" />
									<path
										d="M25.0008 45.018H36.0166V39.1369C36.0166 35.0519 33.8917 31.2611 30.4071 29.1293L29.2644 28.4302C28.0228 27.6707 27.2658 26.32 27.2658 24.8646V24.8646C27.2658 23.4947 27.9369 22.2118 29.0623 21.4307L30.4071 20.4973C33.9208 18.0583 36.0166 14.0525 36.0166 9.77523V4.86719H25.0008"
										stroke="#666666" stroke-width="2" stroke-linejoin="round" />
									<path d="M11.0449 4.86719H38.9559" stroke="#666666" stroke-width="2"
										stroke-linecap="round" />
									<path d="M11.0449 45.0176H38.9559" stroke="#666666" stroke-width="2"
										stroke-linecap="round" />
								</svg>
							</div>
							<div class="our-benefits-item__name">Тест-драйв</div>
							<div class="our-benefits-item__desc">
								Техника на тест-драйв, убедитесь в надежности перед покупкой
							</div>
						</div>
						<div class="our-benefits__item our-benefits-item">
							<div class="our-benefits-item__icon">
								<svg width="50" height="50" viewBox="0 0 50 50" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<rect x="1.21387" y="10.9629" width="47.5722" height="32.0746" rx="5"
										stroke="#666666" stroke-width="2" />
									<rect x="1.21387" y="18.4727" width="47.5722" height="6.49149" stroke="#666666"
										stroke-width="2" />
								</svg>
							</div>
							<div class="our-benefits-item__name">Рассрочка до 0-0-12</div>
							<div class="our-benefits-item__desc">
								Выгодные условия рассрочки на технику Apple
							</div>
						</div>
						<div class="our-benefits__item our-benefits-item">
							<div class="our-benefits-item__icon">
								<svg width="50" height="50" viewBox="0 0 50 50" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_5144_36290)">
										<rect width="50" height="50" fill="white" />
										<path
											d="M1.50977 19.0254L25.0002 6.38359L48.4907 19.0254L25.0002 31.6672L1.50977 19.0254Z"
											stroke="#666666" stroke-width="2" stroke-linejoin="round" />
										<path d="M1.50977 25.916L25.0002 38.5578L48.4907 25.916" stroke="#666666"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M25.751 18.7656L36.4368 24.3948V37.0664" stroke="#666666"
											stroke-width="2" stroke-linecap="round" />
										<path
											d="M35.1133 38.2548L36.4001 36.6289L37.6696 38.1811C39.4538 40.3626 39.4792 43.4919 37.7307 45.7022L36.4001 47.3841L35.0539 45.6256C33.3843 43.4446 33.4088 40.4085 35.1133 38.2548Z"
											stroke="#666666" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</g>
									<defs>
										<clipPath id="clip0_5144_36290">
											<rect width="50" height="50" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</div>
							<div class="our-benefits-item__name">Учебный центр</div>
							<div class="our-benefits-item__desc">
								Обучение для начинающих и продвинутых пользователей
							</div>
						</div>
					</div>

				</div>
			</section>
			<section class="about-us-banner">
				<div class="about-us-banner__container container">
					<div class="about-us-banner__info">
						<div class="about-us-banner__logo">
							<svg width="288" height="72" viewBox="0 0 288 72" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M216.665 12.6328V67.7247" stroke="white" stroke-width="0.4963" />
								<path
									d="M199.7 34.0127V25.8847C199.016 25.744 198.537 25.6743 197.717 25.6743C194.161 25.6743 190.263 28.127 188.622 32.9613H188.348L188.075 26.445H180.758C180.963 29.5282 181.032 32.8212 181.032 37.4457V60.5684H189.442V42.9113C189.442 41.9302 189.579 41.0195 189.716 40.2489C190.468 36.395 193.203 33.7326 197.238 33.7326C198.263 33.7326 199.016 33.8726 199.7 34.0127ZM176.041 45.9242C176.177 45.1535 176.314 43.8924 176.314 42.2807C176.314 34.7833 172.759 25.6743 161.954 25.6743C151.287 25.6743 145.68 34.5729 145.68 44.0324C145.68 54.473 152.039 61.2694 162.843 61.2694C167.63 61.2694 171.596 60.3587 174.468 59.1672L173.237 53.2111C170.707 54.1922 167.903 54.7531 164.006 54.7531C158.672 54.7531 153.954 52.09 153.749 45.9242H176.041ZM168.382 39.8984H153.749C154.091 36.395 156.279 31.56 161.476 31.56C167.083 31.56 168.451 36.7455 168.382 39.8984ZM135.901 32.8916H143.902V26.445H135.901V16.7054L127.696 18.7372V26.445H122.909V32.8916H127.696V48.9371C127.696 53.4215 128.517 56.5048 130.295 58.4662C131.868 60.2179 134.466 61.2694 137.543 61.2694C140.21 61.2694 142.398 60.9189 143.628 60.4284L143.492 53.8417C142.739 54.0521 141.645 54.2625 140.21 54.2625C136.995 54.2625 135.901 52.09 135.901 47.956V32.8916ZM111.285 60.5684H119.696V40.3186C119.696 29.5282 113.678 25.6743 107.866 25.6743C102.327 25.6743 98.7032 28.8976 97.2669 31.56H97.0618L96.6516 26.445H89.2663C89.4714 29.3882 89.5399 32.6811 89.5399 36.6047V60.5684H98.0193V40.529C98.0193 39.5479 98.0879 38.4972 98.3609 37.7258C99.2499 35.1338 101.575 32.6811 104.926 32.6811C109.507 32.6811 111.285 36.395 111.285 41.2996V60.5684ZM84.5491 45.9242C84.6856 45.1535 84.8222 43.8924 84.8222 42.2807C84.8222 34.7833 81.2663 25.6743 70.4624 25.6743C59.7956 25.6743 54.1882 34.5729 54.1882 44.0324C54.1882 54.473 60.5474 61.2694 71.3513 61.2694C76.1384 61.2694 80.1044 60.3587 82.9763 59.1672L81.7451 53.2111C79.2154 54.1922 76.412 54.7531 72.514 54.7531C67.1802 54.7531 62.4624 52.09 62.2573 45.9242H84.5491ZM76.8901 39.8984H62.2573C62.5989 36.395 64.787 31.56 69.9843 31.56C75.591 31.56 76.9587 36.7455 76.8901 39.8984ZM49.2539 23.1702L51.0244 16.5856C49.385 15.7121 45.5817 14.5693 40.2702 14.5693C26.7617 14.5693 16.6631 23.5735 16.6631 38.4904C16.6631 52.2652 25.1875 61.2694 39.2205 61.2694C44.532 61.2694 48.7287 60.2612 50.6303 59.2538L49.3191 52.7355C47.2204 53.7436 43.8112 54.4155 40.5324 54.4155C30.8272 54.4155 25.1223 48.0324 25.1223 38.0872C25.1223 27.2021 31.6139 21.4233 40.5976 21.4233C44.2698 21.4233 47.1552 22.2298 49.2539 23.1702Z"
									fill="white" />
								<path
									d="M0.0759848 61.2688H9.05093V27.508L0.0759848 30.2889V61.2688ZM8.97495 19.69C8.90972 17.0621 7.21923 15.0566 4.48781 15.0566C1.82095 15.0566 0 17.0621 0 19.69C0 22.2482 1.75572 24.2536 4.42259 24.2536C7.21923 24.2536 8.97495 22.2482 8.97495 19.69Z"
									fill="white" />
								<path
									d="M288 55.6365V51.1811C288 50.0614 287.736 49.2129 287.216 48.6669C286.798 48.2102 286.258 47.9754 285.617 47.9754C285.048 47.9754 284.553 48.1337 284.117 48.422C283.78 48.6662 283.492 48.9768 283.256 49.3794H283.236C282.889 48.4402 282.203 47.9754 281.207 47.9754C280.236 47.9754 279.485 48.3996 279.087 49.244H279.037L278.955 48.1337H277.563C277.602 48.901 277.613 49.6229 277.613 50.2819V55.6358H279.166V51.1581C279.166 50.6838 279.256 50.2637 279.538 49.8983C279.822 49.5241 280.181 49.3476 280.622 49.3476C281.055 49.3476 281.401 49.5147 281.622 49.8489C281.852 50.1919 281.98 50.6385 281.98 51.198V55.6352H283.552V51.0539C283.552 50.6114 283.693 50.196 283.964 49.8611C284.231 49.5147 284.579 49.3469 285.017 49.3469C285.958 49.3469 286.414 50.0282 286.414 51.4369V55.6352H288V55.6365ZM279.078 65.368C278.518 64.5561 277.718 64.1542 276.661 64.1542C275.585 64.1542 274.723 64.5561 274.093 65.368C273.499 66.1177 273.206 67.0656 273.206 68.2036C273.206 69.3633 273.512 70.2754 274.166 70.9702C274.81 71.6563 275.715 72 276.858 72C277.799 72 278.617 71.8417 279.241 71.5386L279.042 70.366C278.467 70.6049 277.798 70.7131 277.067 70.7131C276.417 70.7131 275.859 70.5413 275.46 70.1847C275.014 69.8146 274.775 69.2185 274.753 68.4736H279.568C279.603 68.2747 279.616 68.027 279.616 67.7374C279.617 66.7956 279.39 66.0135 279.078 65.368ZM278.165 67.2956H274.753C274.8 66.7949 274.965 66.3619 275.238 65.9999C275.566 65.5662 276.02 65.3321 276.544 65.3321C277.137 65.3321 277.562 65.5669 277.846 66.0135C278.058 66.389 278.171 66.7956 278.165 67.2956ZM274.476 55.6365H275.926C275.897 54.9092 275.86 54.1872 275.86 53.4924V48.1344H274.23V52.7157C274.23 52.9504 274.201 53.1622 274.131 53.3476C273.844 54.06 273.347 54.4166 272.625 54.4166C271.662 54.4166 271.175 53.713 271.175 52.2644V48.1337H269.472V52.5614C269.472 53.7042 269.741 54.5614 270.243 55.1169C270.671 55.5912 271.303 55.8165 272.031 55.8165C273.067 55.8165 273.844 55.3929 274.366 54.5032H274.388L274.476 55.6365ZM270.348 18.9061C270.305 14.5664 274.007 12.3716 274.162 12.2823C272.146 9.18818 268.856 8.75177 267.776 8.70915C264.999 8.42295 262.448 10.3621 261.176 10.3621C259.846 10.3621 257.721 8.75042 255.455 8.82485C252.482 8.84244 249.738 10.5786 248.188 13.3053C245.136 18.6138 247.418 26.6356 250.409 31.1173C251.922 33.3542 253.651 35.7473 255.946 35.6485C258.156 35.5626 258.999 34.2425 261.491 34.2425C264.164 34.2425 264.929 35.6485 267.321 35.6248C269.649 35.5619 271.221 33.4306 272.72 31.2026C274.358 28.6295 275.049 26.2012 275.079 26.0679C275.033 26.0591 270.401 24.3507 270.348 18.9061ZM265.967 5.75986C267.211 4.23888 268.016 2.08527 267.798 0C266.009 0.0629235 263.855 1.19825 262.654 2.75307C261.476 4.10965 260.686 6.24701 260.952 8.28695C262.747 8.45069 264.717 7.29033 265.967 5.75986ZM246.977 49.1588C246.369 49.9172 246.069 50.8611 246.069 51.989C246.069 53.1541 246.388 54.0607 247.041 54.761C247.699 55.4511 248.589 55.7854 249.724 55.7854C250.664 55.7854 251.491 55.6325 252.168 55.3341L251.93 54.1649C251.327 54.4038 250.67 54.5134 249.943 54.5134C249.28 54.5134 248.746 54.3368 248.344 53.9897C247.882 53.6101 247.644 53.0323 247.62 52.2874H252.525C252.574 52.0884 252.591 51.8313 252.591 51.5289C252.591 50.585 252.362 49.8043 251.945 49.1547C251.388 48.3651 250.593 47.9538 249.54 47.9538C248.468 47.9538 247.607 48.3645 246.977 49.1588ZM247.62 51.0905C247.667 50.5844 247.843 50.1331 248.102 49.7948C248.437 49.3482 248.864 49.1047 249.409 49.1047C250.001 49.1047 250.415 49.353 250.713 49.8083C250.929 50.1649 251.05 50.5979 251.035 51.0905H247.62ZM248.622 64.1542C247.554 64.1542 246.69 64.5561 246.06 65.368C245.448 66.1177 245.155 67.0656 245.155 68.2036C245.155 69.3633 245.474 70.2754 246.122 70.9702C246.774 71.6563 247.663 72 248.798 72C249.763 72 250.575 71.8417 251.258 71.5386L251.016 70.3653C250.414 70.6042 249.762 70.7124 249.018 70.7124C248.357 70.7124 247.842 70.5406 247.425 70.184C246.965 69.8139 246.729 69.2178 246.713 68.4729H251.614C251.656 68.274 251.689 68.0264 251.689 67.7368C251.689 66.7943 251.442 66.0121 251.033 65.3666C250.476 64.5561 249.674 64.1542 248.622 64.1542ZM248.483 65.3321C249.069 65.3321 249.513 65.5669 249.787 66.0135C250.023 66.3883 250.136 66.7949 250.12 67.2956H246.714C246.761 66.7949 246.924 66.3619 247.204 65.9999C247.519 65.5669 247.97 65.3321 248.483 65.3321ZM244.988 49.5559C245.117 49.5559 245.241 49.5607 245.401 49.6006V48.0167C245.278 47.9842 245.154 47.9754 245.077 47.9754C244.654 47.9754 244.267 48.1107 243.881 48.3861C243.48 48.675 243.203 49.0817 243.05 49.56H242.99L242.933 48.1337H241.51C241.545 48.8421 241.566 49.6317 241.566 50.4849V55.6358H243.202V51.7001C243.202 51.0993 243.35 50.5979 243.619 50.2237C243.974 49.7772 244.415 49.5559 244.988 49.5559ZM239.62 50.5445C240.182 49.9802 240.446 49.2075 240.446 48.2467C240.446 47.3076 240.144 46.5404 239.505 45.9849C238.856 45.4165 237.895 45.1357 236.602 45.1357C235.604 45.1357 234.703 45.1993 234.126 45.3658V55.6365H235.594V51.6189C235.818 51.65 236.115 51.6771 236.515 51.6771C237.887 51.6771 238.924 51.3029 239.62 50.5445ZM238.844 48.3509C238.844 48.9775 238.63 49.4748 238.219 49.8354C237.809 50.1926 237.248 50.3726 236.527 50.3726C236.128 50.3726 235.825 50.3415 235.594 50.2819V46.5268C235.869 46.4585 236.233 46.4362 236.674 46.4362C237.371 46.4362 237.896 46.5891 238.268 46.924C238.643 47.2589 238.844 47.723 238.844 48.3509ZM240.35 61.3605C239.329 61.3605 238.454 61.4234 237.703 61.5628V71.8505H239.357V67.4587H240.35C240.892 67.4587 241.316 67.6028 241.595 67.9012C241.884 68.1671 242.101 68.6684 242.234 69.3721C242.513 70.7131 242.74 71.5487 242.89 71.8505H244.63C244.539 71.6705 244.416 71.3275 244.288 70.7537C244.185 70.4425 244.057 69.8376 243.826 68.9709C243.536 67.8606 243.055 67.1562 242.355 66.8991V66.8538C242.89 66.6549 243.335 66.3531 243.663 65.9289C244.095 65.4499 244.288 64.8592 244.288 64.2313C244.288 63.3599 244.004 62.6745 243.389 62.1819C242.752 61.6217 241.734 61.3605 240.35 61.3605ZM239.357 62.7009C239.616 62.6285 240.004 62.5879 240.522 62.5879C241.892 62.5967 242.592 63.1833 242.592 64.3795C242.592 64.9492 242.401 65.3869 242.013 65.7205C241.636 66.0588 241.135 66.2401 240.492 66.2401H239.357V62.7009ZM252.974 70.249L252.626 71.4898C253.213 71.8329 253.915 72 254.759 72C255.634 72 256.334 71.7876 256.84 71.3681C257.327 70.935 257.585 70.3796 257.585 69.6982C257.585 68.6596 256.968 67.9147 255.675 67.4221C255.204 67.2422 254.854 67.0656 254.688 66.9079C254.501 66.7496 254.383 66.5284 254.383 66.276C254.383 66.0223 254.488 65.8112 254.67 65.6441C254.854 65.4817 255.133 65.3957 255.474 65.3957C256.003 65.3957 256.496 65.5399 256.967 65.8112L257.315 64.6285C256.804 64.3301 256.189 64.1819 255.466 64.1819C254.669 64.1819 254.024 64.4032 253.534 64.8179C253.07 65.2658 252.823 65.8017 252.823 66.4438C252.823 67.3998 253.486 68.096 254.788 68.6008C255.251 68.7774 255.576 68.9445 255.762 69.1157C255.94 69.2963 256.044 69.5534 256.044 69.8295C256.044 70.4425 255.605 70.7456 254.788 70.7456C254.141 70.7449 253.536 70.5873 252.974 70.249ZM256.926 49.3482C257.371 49.3482 257.714 49.5154 257.923 49.8496C258.154 50.1926 258.283 50.6392 258.283 51.1987V55.6358H259.855V51.0546C259.855 50.6121 259.996 50.1967 260.249 49.8618C260.522 49.5154 260.876 49.3476 261.209 49.3476C262.057 49.3476 262.514 50.0289 262.514 51.4376V55.6358H264.108V51.1805C264.108 50.0607 263.849 49.2122 263.33 48.6662C262.907 48.2095 262.366 47.9747 261.716 47.9747C261.229 47.9747 260.835 48.1331 260.425 48.4213C260.065 48.6655 259.784 48.9761 259.548 49.3787H259.531C259.185 48.4396 258.496 47.9747 257.506 47.9747C256.518 47.9747 255.789 48.399 255.282 49.2434H255.243L255.146 48.1331H253.778C253.793 48.9003 253.826 49.6223 253.826 50.2813V55.6352H255.398V51.1575C255.398 50.6832 255.55 50.263 255.839 49.8976C256.109 49.5248 256.487 49.3482 256.926 49.3482ZM259.597 65.368C258.994 66.1177 258.698 67.0656 258.698 68.2036C258.698 69.3633 259.017 70.2754 259.671 70.9702C260.318 71.6563 261.163 72 262.159 72C263.113 72 263.929 71.8417 264.619 71.5386L264.366 70.366C263.785 70.6049 263.113 70.7131 262.373 70.7131C261.717 70.7131 261.252 70.5413 260.961 70.1847C260.518 69.8146 260.265 69.2185 260.25 68.4736H264.981C265.005 68.2747 265.038 68.027 265.038 67.7374C265.038 66.7949 264.823 66.0128 264.384 65.3673C263.847 64.5554 263.032 64.1535 261.981 64.1535C261.099 64.1542 260.236 64.5561 259.597 65.368ZM260.249 67.2956C260.306 66.7949 260.472 66.3619 260.734 65.9999C261.086 65.5662 261.328 65.3321 261.848 65.3321C262.447 65.3321 262.857 65.5669 263.15 66.0135C263.373 66.3883 263.483 66.7949 263.483 67.2956H260.249ZM266.234 45.1412C266.042 45.3536 265.951 45.5742 265.951 45.859C265.951 46.1385 266.042 46.3732 266.227 46.5674C266.403 46.7481 266.639 46.8658 266.903 46.8658C267.205 46.8658 267.459 46.7575 267.652 46.5674C267.837 46.3868 267.938 46.1567 267.938 45.859C267.938 45.5742 267.837 45.3529 267.652 45.1412C267.459 44.9646 267.223 44.8651 266.942 44.8651C266.645 44.8651 266.435 44.9646 266.234 45.1412ZM267.749 48.1344H266.119V55.6365H267.749V48.1344ZM268.18 60.8815H266.535V71.8505H268.18V60.8815ZM271.622 60.8815H269.908V71.8505H271.622V60.8815ZM282.509 64.3301H281.099C281.144 65.048 281.147 65.8376 281.147 66.6867V71.8505H282.792V67.9052C282.792 67.2956 282.943 66.8037 283.211 66.4289C283.509 65.96 283.955 65.7476 284.518 65.7476C284.697 65.7476 284.859 65.7746 285.017 65.7976V64.2131C284.903 64.1907 284.782 64.1819 284.597 64.1819C284.186 64.1819 283.796 64.3213 283.431 64.5784C283.063 64.8673 282.784 65.2787 282.614 65.7564H282.585L282.509 64.3301Z"
									fill="white" />
							</svg>
						</div>
						<div class="about-us-banner__text">
							<p>Единственный официальный премиум-партнер Apple
								в&nbsp;Калининграде, авторизованный сервисный центр и&nbsp;авторизованный тренинг-центр</p>
						</div>
						<div class="about-us-banner__btns">
							<div class="about-us-banner__btn">
								<a href="#" class="btn">Подробнее о нас</a>
							</div>

						</div>
					</div>
					<div class="about-us-banner__bg">
						<img src="/img/about-us-banner-min.jpg" alt="">
					</div>
				</div>
			</section>
		</main>
		<?php include_once "inc/footer.php"; ?>
		<?php include_once "inc/footer-after.php"; ?>
	</div>
	<?php include_once "inc/script.php"; ?>
</body>

</html>