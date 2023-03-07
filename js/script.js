document.addEventListener('DOMContentLoaded', function(){
	function tooltip(){
		let $tooltip = document.querySelectorAll('.tooltip');
		$tooltip.forEach(function($item, indx){
			$item.addEventListener('click', function(e){
				let $this = e.target;
				if ($this.classList.contains('toggle-tooltip__js')){
					getSiblings($item).forEach($i => $i.classList.remove('_active'));
					$this.closest('.tooltip').classList.toggle('_active');
				}
				if ($this.classList.contains('close-tooltip__js')){
					$this.closest('.tooltip').classList.remove('_active');
				}
				if ($this.classList.contains('open-list-cities__js')){
					$this.closest('.tooltip').classList.remove('_active');
					console.log('list-cities')
				}
			})
		})
	}
	function submenu(){
		let $submenu = document.querySelectorAll('.submenu__js>a');
		$submenu.forEach(function($item, indx) {
			$item.addEventListener('click', function(e){
				$item.parentElement.classList.toggle('_active');
				e.preventDefault();
			})
		})
	}
	function menuBody() {
		let $links = document.querySelectorAll('.open-menu-body__js');
		$links.forEach(function($link, indx){
			$link.addEventListener('click', function(e){
				getSiblings($link.parentElement).forEach(function($i, indx){
					$i.querySelector('a').classList.remove('_active')
					document.querySelector('.menu-body__category[data-category-id="'+ $i.querySelector('a').getAttribute('data-category-name') + '"]').classList.remove('_active');
				});
				$link.classList.toggle('_active');
				document.querySelector('.menu-body__category[data-category-id="'+ $link.getAttribute('data-category-name') + '"]').classList.add('_active');
				if ($link.classList.contains('_active')){
					document.querySelector('.menu-body').classList.add('_active');
					document.querySelector('.menu-body').style.height = document.querySelector('.menu-body .menu-body__container').clientHeight + 'px';

				} else{
					document.querySelector('.menu-body').classList.remove('_active');
					document.querySelector('.menu-body').style.height = 0;
				}
				e.preventDefault();
			})
		})
	}

	tooltip();
	submenu();
	menuBody();

	document.addEventListener('mouseup', function(e){
		function closePopupsOrTooltips($items, _parentEl, _oneEl){
			$items.forEach(function($item, indx){
				if (_oneEl === undefined && $item.contains(e.target) === false){
					$item.closest(_parentEl).classList.remove('_active');
				} else if ($item.contains(e.target) === false && $item.closest(_parentEl).querySelector(_oneEl).contains(e.target) === false){
					$item.closest(_parentEl).classList.remove('_active');
				}
			})
		}

		closePopupsOrTooltips(document.querySelectorAll('.tooltip__body'), '.tooltip', '.tooltip__head');
		closePopupsOrTooltips(document.querySelectorAll('.submenu__list'), '.submenu', '.submenu__js>a');
	})

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
})