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
			<div class="our-news">
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
						<div class="our-news__slider-scrollbar swiper-scrollbar"></div>
						<div class="our-news__slider-arrows slider-arrows">
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
			</div>
		</div>

		<?php include_once "inc/footer-after.php"; ?>
	</div>

	<?php include_once "inc/script.php"; ?>
</body>

</html>