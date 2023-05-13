document.addEventListener('DOMContentLoaded', function () {
	let $body = document.body;

	function tooltip() {
		let $tooltip = document.querySelectorAll('.tooltip');
		$tooltip.forEach(function ($item, indx) {
			$item.addEventListener('click', function (e) {
				let $this = e.target;
				if ($this.classList.contains('toggle-tooltip__js')) {
					getSiblings($item).forEach($i => $i.classList.remove('_active'));
					$this.closest('.tooltip').classList.toggle('_active');
				}
				if ($this.classList.contains('close-tooltip__js')) {
					$this.closest('.tooltip').classList.remove('_active');
				}
				if ($this.classList.contains('open-list-cities__js')) {
					$this.closest('.tooltip').classList.remove('_active');
					console.log('list-cities')
				}
			})
		})
	}
	function submenu() {
		let $submenu = document.querySelectorAll('.submenu__js>a');
		$submenu.forEach(function ($item, indx) {
			$item.addEventListener('click', function (e) {
				$item.parentElement.classList.toggle('_active');
				e.preventDefault();
			})
		})
	}
	function menuBody() {
		let $links = document.querySelectorAll('.open-menu-body__js');
		$links.forEach(function ($link, indx) {
			$link.addEventListener('click', function (e) {
				getSiblings($link.parentElement).forEach(function ($i, indx) {
					$i.querySelector('a').classList.remove('_active')
					document.querySelector('.menu-body__category[data-category-id="' + $i.querySelector('a').getAttribute('data-category-name') + '"]').classList.remove('_active');
				});
				$link.classList.toggle('_active');
				document.querySelector('.menu-body__category[data-category-id="' + $link.getAttribute('data-category-name') + '"]').classList.add('_active');
				if ($link.classList.contains('_active')) {
					document.querySelector('.menu-body').classList.add('_active');
					document.querySelector('.menu-body').style.height = document.querySelector('.menu-body .menu-body__container').clientHeight + 'px';

				} else {
					document.querySelector('.menu-body').classList.remove('_active');
					document.querySelector('.menu-body').style.height = 0;
				}
				e.preventDefault();
			})
		});

		let $selectedProducts = document.querySelectorAll('.open-selected-products__js');
		$selectedProducts.forEach(function ($item, indx) {
			$item.addEventListener('click', function () {
				// getSiblings($item).forEach($i => $i.parentElement.classList.remove('_active'));
				$item.parentElement.classList.toggle('_active');
			})
		});

		let $headerBurgerMenu = document.querySelector('.toggle-header-burger__js');
		$headerBurgerMenu.addEventListener('click', function (e) {
			let $this = e.target;
			$this.classList.toggle('_active');
			document.querySelector('.mob-menu-body').classList.toggle('_active');
			$body.classList.toggle('_overflow');
		})
	}
	function quantity() {
		let $quantity = document.querySelectorAll('.quantity__js');
		$quantity.forEach(function ($item, indx) {
			let i = 1;
			$item.querySelector('.click-change-count__js.minus').addEventListener('click', function () {
				if (i > 1) {
					i--;
					$item.parentElement.querySelector('.quantity__count').textContent = i;
					if ($item.querySelector('.change-basket-product-count__js')) {
						let price = Number($this.closest('.selected-products-item').querySelector('.selected-products-item__price').getAttribute('data-product-price'));
						$item.closest('.selected-product__js').querySelector('.selected-products-item__count .price').textContent = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ₽';
						$item.closest('.selected-product__js').querySelector('.selected-products-item__count .count').textContent = i + ' шт';
						$item.closest('.selected-product__js').querySelector('.item-price.current').textContent = (price * i).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ₽';
					}
				} else {
					if ($item.querySelector('.change-basket-product-count__js')) {
						$item.closest('.selected-product__js').querySelector('.selected-products-item__count').classList.add('hidden');
					}
				}
				if ($item.querySelector('.change-basket-product-count__js')) {
					sumProductsPrice(document.querySelector('.selected-basket-products'));
				}
			});
			$item.querySelector('.click-change-count__js.plus').addEventListener('click', function () {
				i++;
				$item.parentElement.querySelector('.quantity__count').textContent = i;
				if ($item.querySelector('.change-basket-product-count__js')) {
					let price = Number($item.closest('.selected-products-item').querySelector('.selected-products-item__price').getAttribute('data-product-price'));
					$item.closest('.selected-product__js').querySelector('.selected-products-item__count .price').textContent = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ₽';
					$item.closest('.selected-product__js').querySelector('.selected-products-item__count .count').textContent = i + ' шт';
					$item.closest('.selected-product__js').querySelector('.item-price.current').textContent = (price * i).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ₽';
					$item.closest('.selected-product__js').querySelector('.selected-products-item__count').classList.remove('hidden');
					sumProductsPrice(document.querySelector('.selected-basket-products'));
				}
			});
		});
		let $ajaxProducts = document.querySelector('.ajax-products');
		let i = 1;
		$ajaxProducts.addEventListener('click', function (e) {
			let $this = e.target;

			if ($this.classList.contains('change-basket-product-count__js') && $this.classList.contains('minus')) {
				if (i > 1) {
					i--;
					$this.parentElement.querySelector('.quantity__count').textContent = i;
					let price = Number($item.closest('.selected-products-item').querySelector('.selected-products-item__price').getAttribute('data-product-price'));
					$this.closest('.selected-product__js').querySelector('.selected-products-item__count .price').textContent = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ₽';
					$this.closest('.selected-product__js').querySelector('.selected-products-item__count .count').textContent = i + ' шт';
					$this.closest('.selected-product__js').querySelector('.item-price.current').textContent = (price * i).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ₽';
				} else {
					$this.closest('.selected-product__js').querySelector('.selected-products-item__count').classList.add('hidden');
				}
				sumProductsPrice(document.querySelector('.selected-basket-products'));
			} else if ($this.classList.contains('change-basket-product-count__js') && $this.classList.contains('plus')) {
				i++;
				$this.parentElement.querySelector('.quantity__count').innerHTML = i;
				let price = Number($this.closest('.selected-products-item').querySelector('.selected-products-item__price').getAttribute('data-product-price'));
				$this.closest('.selected-product__js').querySelector('.selected-products-item__count .price').textContent = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ₽';
				$this.closest('.selected-product__js').querySelector('.selected-products-item__count .count').textContent = i + ' шт';
				$this.closest('.selected-product__js').querySelector('.item-price.current').textContent = (price * i).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ₽';
				$this.closest('.selected-product__js').querySelector('.selected-products-item__count').classList.remove('hidden');
				sumProductsPrice(document.querySelector('.selected-basket-products'));
			}

		})

		let $selectedProductsCategory = document.querySelectorAll('.selected-products');
		$selectedProductsCategory.forEach(function ($category, indx) {
			$category.querySelectorAll('.selected-product__js').forEach(function ($product, index) {
				checkProductsCount($product);
			})
		});

		function checkProductsCount($product) {
			if ($product.closest('.selected-basket-products')) {
				if (Number($product.querySelector('.quantity__count').textContent) <= 1) {
					$product.querySelector('.selected-products-item__count').classList.add('hidden');
				} else {
					$product.querySelector('.selected-products-item__count').classList.remove('hidden');
				}
			}

		}
	}
	function selectedProduct() {
		let $contentSelectedProducts = document.querySelector('.ajax-products');
		$contentSelectedProducts.addEventListener('click', function (e) {
			let $this = e.target;
			if ($this.closest('.remove-selected-product__js')) {
				$this.closest('.selected-products-item').remove();
				setTimeout(() => {
					sumProductsPrice(document.querySelector('.selected-basket-products'));
				}, 300);
				countSelectedProducts(document.querySelector('.selected-favorites-products'));
				countSelectedProducts(document.querySelector('.selected-comparisons-products'));
			}
		});
		sumProductsPrice(document.querySelector('.selected-basket-products'));
		countSelectedProducts(document.querySelector('.selected-favorites-products'));
		countSelectedProducts(document.querySelector('.selected-comparisons-products'));

		oAjax('/ajax/basket-products.php', document.querySelector('.selected-basket-products .selected-products__list'));
		oAjax('/ajax/comparisons-products.php', document.querySelector('.selected-comparisons-products .selected-products__list'));
		oAjax('/ajax/favorites-products.php', document.querySelector('.selected-favorites-products .selected-products__list'));
	}
	let totalPrice = document.querySelector('.selected-basket-products .selected-products-box__total-price span');
	function sumProductsPrice($item) {
		setTimeout(() => {
			let price = 0;
			$item.querySelectorAll('.selected-products-item').forEach(function ($product, i) {
				price += Number(($product.querySelector('.selected-products-item__price .item-price.current').textContent).replace(/\D/g, ""));
			})
			totalPrice.textContent = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
		}, 100);

	}
	function countSelectedProducts($item) {
		setTimeout(() => {
			let countProduct = $item.querySelector('.selected-products-box__label span');
			let count = $item.querySelectorAll('.selected-products-item').length.toString();
			if (count[count.length - 1] === '1') {
				countProduct.textContent = $item.querySelectorAll('.selected-products-item').length + ' товар';
			} else if (count[count.length - 1] === '2' || count[count.length - 1] === '3' || count[count.length - 1] === '4') {
				countProduct.textContent = $item.querySelectorAll('.selected-products-item').length + ' товара';
			} else {
				countProduct.textContent = $item.querySelectorAll('.selected-products-item').length + ' товаров';
			}
		}, 100);
	}
	function mainSlider() {
		const swiper = new Swiper('.main-slider__body', {
			// Optional parameters
			/*direction: 'vertical',*/
			loop: false,
			slidesPerView: 1,
			spaceBetween: 0,
			pagination: {
				el: '.main-slider__pagination',
				clickable: true,
				renderBullet: function (index, className) {
					return '<span class="' + className + '">' + (index + 1) + '</span>';
				}
			},
			clickable: false,
			navigation: {
				nextEl: '.main-slider__arrow.right',
				prevEl: '.main-slider__arrow.left',
			},
			// allowTouchMove: false,
		});
	}
	function topProducts() {
		const swiper = new Swiper('.top-products__slider', {
			// Optional parameters
			/*direction: 'vertical',*/
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 0,
			clickable: false,
		});
	}
	function ourNews() {
		const swiper = new Swiper('.our-news__slider-body', {
			// Optional parameters
			/*direction: 'vertical',*/
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 0,
			navigation: {
				nextEl: '.our-news__slider-arrow.right',
				prevEl: '.our-news__slider-arrow.left',
			},
			scrollbar: {
				el: '.our-news__slider-scrollbar',
				draggable: true,
			},
		});
	}
	function ourReviews() {
		const swiper = new Swiper('.our-reviews__slider-body', {
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 0,
			// Navigation arrows
			navigation: {
				nextEl: '.our-reviews__slider-arrow.right',
				prevEl: '.our-reviews__slider-arrow.left',
			},
			scrollbar: {
				el: '.our-reviews__slider-scrollbar',
				draggable: true,
			},
		});
	}
	function productsSlider() {
		const swiper = new Swiper('.special-suggest__slider-body', {
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 0,
			navigation: {
				nextEl: '.special-suggest__slider-arrow.right',
				prevEl: '.special-suggest__slider-arrow.left',
			},
			scrollbar: {
				el: '.special-suggest__slider-scrollbar',
				draggable: true,
			},
			allowTouchMove: true,
			breakpoints: {
				1024: {
					allowTouchMove: false,

				},
			}
		});

		const productsSwiper = new Swiper('.card-product__slider', {
			loop: false,
			slidesPerView: 1,
			spaceBetween: 30,
			pagination: {
				el: '.card-product__slider-pagination',
				clickable: true,
			},
		});
	}
	function productsCard() {
		let i = 0;
		let _div = document.createElement('div');


		document.querySelector('.ajax-cards-products').addEventListener('click', function (e) {
			let _this = e.target;
			if (_this.closest('.add-favorites-product__js')) {
				let $productIcon = _this.closest('.add-favorites-product__js');
				$productIcon.classList.toggle('_active');
				$productIcon.closest('.card-product').toggle('_favorite');
			}
			if (_this.closest('.look-more-products__js')) {
				let $moreProdBtn = _this.closest('.look-more-products__js');
				let _offset = Number($moreProdBtn.getAttribute('data-offset'));
				let _limit = Number($moreProdBtn.getAttribute('data-limit'));
				let _total = Number($moreProdBtn.getAttribute('data-total'));
				let _list = document.querySelector('.special-suggest__wrapper');

				// if (_offset <= _total){
				let oAjaxCollections = new XMLHttpRequest();

				oAjaxCollections.open("POST", '../ajax/products.php', true);
				// oAjaxCollections.setRequestHeader('Content-type', 'application/x-www-form-urlecoded; charset=utf-8');

				oAjaxCollections.addEventListener('readystatechange', function () {
					if ((oAjaxCollections.readyState === 4) && (oAjaxCollections.status === 200)) {
						_div.insertAdjacentHTML('beforeend', strToHtml(oAjaxCollections.responseText))
						for (let index = _offset; index < _div.length; index++) {
							let element = _div[index];
							i++;
							_list.insertAdjacentElement('beforeend', element);
							$moreProdBtn.setAttribute('data-offset', _offset + i);
						}
					}
				});
				oAjaxCollections.send();
			}
		});
	}
	function mainAccessories() {
		const swiper = new Swiper('.main-accessories__slider', {
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 0,
			pagination: {
				el: '.main-accessories__slider-pagination',
				clickable: true,
			},
		});
	}
	function proSpecialSuggest() {
		const swiper = new Swiper('.pro-special-suggest__slider-body', {
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 0,
			speed: 1000,
			pagination: {
				el: '.pro-special-suggest__slider-pagination',
				clickable: true,
				renderBullet: function (index, className) {
					return '<span class="' + className + '">' + (index + 1) + '</span>';
				}
			},
			navigation: {
				nextEl: '.pro-special-suggest__slider-arrow.right',
				prevEl: '.pro-special-suggest__slider-arrow.left',
			},
		});
	}

	tooltip();
	submenu();
	menuBody();
	quantity();
	selectedProduct();
	mainSlider();
	ourNews();
	ourReviews();
	productsSlider();
	productsCard();
	proSpecialSuggest();

	if (document.documentElement.clientWidth <= 1023) {
		topProducts();
		mainAccessories();
	}

	document.addEventListener('mouseup', function (e) {
		function closePopupsOrTooltips($items, _parentEl, _oneEl) {
			$items.forEach(function ($item, indx) {
				if (_oneEl === undefined && $item.contains(e.target) === false) {
					$item.closest(_parentEl).classList.remove('_active');
				} else if ($item.contains(e.target) === false && $item.closest(_parentEl).querySelector(_oneEl) && $item.closest(_parentEl).querySelector(_oneEl).contains(e.target) === false) {
					$item.closest(_parentEl).classList.remove('_active');
				}

				if ($item.closest(_parentEl).classList.contains('menu-body') && document.querySelector(_oneEl) && document.querySelector(_oneEl).contains(e.target) === false) {
					$item.closest(_parentEl).style.height = 0;
					document.querySelector(_oneEl).classList.remove('_active');
					$item.closest(_parentEl).classList.remove('_active');
				}
			})
		}

		closePopupsOrTooltips(document.querySelectorAll('.tooltip__body'), '.tooltip', '.tooltip__head');
		closePopupsOrTooltips(document.querySelectorAll('.submenu__list'), '.submenu', '.submenu__js>a');
		closePopupsOrTooltips(document.querySelectorAll('.selected-products__body'), '.selected-products', '.open-selected-products__js');
		closePopupsOrTooltips(document.querySelectorAll('.menu-body__container'), '.menu-body', '.open-menu-body__js._active');
	})

	let $tabs = document.querySelectorAll('.tab-item__js');
	$tabs.forEach(function($tab, indx) {
		$tab.addEventListener('click', function(e){
			let _this = e.target;
			if (_this.closest('.click-tab-item__js')){
				let item = _this.closest('.click-tab-item__js');
				let i = getIndex(item, $tab.querySelectorAll('.click-tab-item__js'));
				siblingsClass(item, 'remove', '_active');
				item.classList.add('_active');
				setClass($tab.querySelectorAll('.tab-item-block'), 'remove', '_active');
				$tab.querySelectorAll('.tab-item-block')[i].classList.add('_active');
			}
		})
	})

	function oAjax(url, $item) {
		let oAjaxCollections = new XMLHttpRequest();
		oAjaxCollections.open("POST", url, true);
		oAjaxCollections.setRequestHeader('Content-type', 'application/x-www-form-urlecoded; charset=utf-8')

		function getData() {
			if ((oAjaxCollections.readyState === 4) && (oAjaxCollections.status === 200)) {
				$item.insertAdjacentHTML('beforeEnd', oAjaxCollections.responseText)
			}
		}

		oAjaxCollections.addEventListener('readystatechange', getData);

		oAjaxCollections.send();
	}

	function strToHtml(str) {
		return new DOMParser().parseFromString(str, "text/html").body.children;
	}

	function getSiblings(elem) {
		let siblings = [];
		let sibling = elem;
		while (sibling.previousSibling) {
			sibling = sibling.previousSibling; sibling.nodeType == 1 && siblings.push(sibling);
		}
		sibling = elem;
		while (sibling.nextSibling) {
			sibling = sibling.nextSibling; sibling.nodeType == 1 && siblings.push(sibling);
		} return siblings;
	}

	function getSiblingsLeft(elem) {
		let siblings = [];
		let sibling = elem;
		while (sibling.previousSibling) {
			sibling = sibling.previousSibling; sibling.nodeType == 1 && siblings.push(sibling);
		} return siblings;
	}

	function getSiblingsRight(elem) {
		let siblings = [];
		let sibling = elem;
		while (sibling.nextSibling) {
			sibling = sibling.nextSibling; sibling.nodeType == 1 && siblings.push(sibling);
		} return siblings;
	}

	function siblingsClass(item, action, nameClass) {
		getSiblings(item).forEach(function (el, indx) {
			if (action === 'remove') {
				el.classList.remove(nameClass);
			} else if (action === 'add') {
				el.classList.add(nameClass);
			} else {
				el.classList.toggle(nameClass);
			}
		})
	}

	function setClass($item, action, nameClass) {
		$item.forEach(function (el, indx) {
			if (action === 'remove') {
				el.classList.remove(nameClass);
			} else if (action === 'add') {
				el.classList.add(nameClass);
			} else {
				el.classList.toggle(nameClass);
			}
		})
	}

	function reverseArr(input) {
		let ret = new Array;
		for (var i = input.length - 1; i >= 0; i--) {
			ret.push(input[i]);
		}
		return ret;
	}

	SmoothScroll({
		// Время скролла 400 = 0.4 секунды
		animationTime: 1500,
		// Размер шага в пикселях
		stepSize: 50,
		// Дополнительные настройки:
		// Ускорение
		accelerationDelta: 130,
		// Максимальное ускорение
		accelerationMax: 1,
		// Поддержка клавиатуры
		keyboardSupport: true,
		// Шаг скролла стрелками на клавиатуре в пикселях
		arrowScroll: 50,
		// Pulse (less tweakable)
		// ratio of "tail" to "acceleration"
		pulseAlgorithm: false,
		pulseScale: 4,
		pulseNormalize: 1,
		// Поддержка тачпада
		touchpadSupport: false,
	})

	function dynamicAdaptive(size) {
		let $items = document.querySelectorAll('[data-da]');
		$items.forEach(function ($item, indx) {
			let _data = $item.getAttribute('data-da').split(',');
			let _where = _data[0].trim();
			let _sizeScreen = _data[1].trim();
			let _pos = _data[2].trim();

			if (size === 'max' && document.documentElement.clientWidth <= _sizeScreen) {
				moveItem();
			}
			if (size === 'min' && document.documentElement.clientWidth >= _sizeScreen) {
				moveItem();
			}

			function moveItem() {
				if (_pos === 'first') {
					document.querySelectorAll(_where)[indx].insertAdjacentElement('afterbegin', $item);
				}
				if (_pos === 'last') {
					document.querySelectorAll(_where)[indx].insertAdjacentElement('beforeEnd', $item);
					console.log(true)

				}
			}
		})
	}
	dynamicAdaptive('max');

	function getIndex(_this, items) {
		let i;
		items.forEach(function (item, indx) {
			if (_this === item) {
				i = indx;
			}
		})
		return i;
	}

	function heightNull($items) {
		$items.forEach(function($item, indx){
			$item.style.height = 0;
		})
	}
})