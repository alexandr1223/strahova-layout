document.addEventListener("DOMContentLoaded", function(event) {

    $('img.img-svg').each(function(){
        var $img = $(this);
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
        $.get(imgURL, function(data) {
        var $svg = $(data).find('svg');
        if(typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }
        $img.replaceWith($svg);
        }, 'xml');
    }); 

    function menu(menuBtn, block, close) {
        if (document.querySelector(menuBtn)) {
            document.querySelector(menuBtn).addEventListener('click', () => {
                document.querySelector(block).style.cssText = 'left: 0';
                document.body.style.overflow = "hidden"
            })
            document.querySelector('.header').addEventListener('click', (item) => {
                if (item.target.classList.contains(close)) {
                    document.body.style.overflow = "auto"
                    document.querySelector(block).style.cssText = 'left: -100%';
                }  
            })
        }
    } 
    menu('.header__humburger', '.header__nav', 'header__nav');

    function tabs() {
		if (document.querySelector('.services__moreTabs')) {
			var $ = function (selector) {
				return document.querySelectorAll(selector);
			};
			
			
			// Define tabs, write down them classes
			var tabs = [
			'.tabbed-section__selector-tab-1',
			'.tabbed-section__selector-tab-2'
			];
			
			// Create the toggle function
			var toggleTab = function(element) {
			var parent = element.parentNode;
			
			// Do things on click
			$(element)[0].addEventListener('click', function(){
				this.parentNode.childNodes[1].classList.remove('active');
				this.parentNode.childNodes[3].classList.remove('active');
			
				this.classList.add('active');
				
				// Check if the clicked tab contains the class of the 1 or 2
				if(this.classList.contains('tabbed-section__selector-tab-1')) {
				// and change the classes, show the first content panel
				$('.tabbed-section-1')[0].classList.remove('hidden');
				$('.tabbed-section-1')[0].classList.add('visible');
				
				// Hide the second
				$('.tabbed-section-2')[0].classList.remove('visible');
				$('.tabbed-section-2')[0].classList.add('hidden');
				}
			
				if(this.classList.contains('tabbed-section__selector-tab-2')) {
				// and change the classes, show the second content panel
				$('.tabbed-section-2')[0].classList.remove('hidden');
				$('.tabbed-section-2')[0].classList.add('visible');
				// Hide the first
				$('.tabbed-section-1')[0].classList.remove('visible');
				$('.tabbed-section-1')[0].classList.add('hidden');
				}
			});
			};
			for (var i = tabs.length - 1; i >= 0; i--) {
				toggleTab(tabs[i])
			};
		}
    }
    tabs();

    function addKaskoDriver() {
        if (document.querySelector('.services__kasko')) {
            let i = 1;
            document.querySelector('.services__addBtn').addEventListener('click', () => {
                let input = document.createElement('input');
                input.setAttribute('name', 'driver' + i);
                input.setAttribute('placeholder', 'Возраст водителя')
                input.style.cssText = 'margin-top: -30px'
                i++;
                document.querySelector('.services__input--add').appendChild(input)
            })
        }
    }
    addKaskoDriver();

    function addOsagoDriver() {
        if (document.querySelector('.services__osago')) {
            let i = 2;
            document.querySelector('.services__addBtn').addEventListener('click', () => {
                let item = document.createElement('div');
                item.innerHTML = `
                    <div class="services__osagoDriver">
                        <div class="services__groupDriver">
                            <div class="services__input">
                                <span>ВОДИТЕЛЬ ${i}</span>
                            </div>
                            <div class="services__groupItem services__input">
                                <input type="text" name="owner-fio" placeholder="Фамилия, имя, отчество">
                                <div class="services__groupMore">
                                    <input type="date" name="birthday" placeholder="Дата рождения">
                                    <div class="services__radio-btn">
                                        <input id="driver-man${i}" type="radio" name="driver-radio${i}" value="man" checked>
                                        <label for="driver-man${i}">Муж.</label>
                                    </div>
                                        
                                    <div class="services__radio-btn">
                                        <input id="driver-woman${i}" type="radio" name="driver-radio${i}" value="woman">
                                        <label for="driver-woman${i}">Жен.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services__passport">
                            <div class="services__input">
                                <span>ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ РФ</span>
                            </div>
                            <div class="services__passportGroup">
                                <div class="services__passportItem">
                                    <input type="text" class="services__passportSeries" name="passport-series${i}" placeholder="Серия" maxlength="4">
                                    <input type="text" class="services__passportNumber" name="passport-number${i}" id="" maxlength="6" placeholder="Номер">
                                </div>
                                <div class="services__passportItem">
                                    <input type="date" name="birthday${i}" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>`
                document.querySelector('.services__osago').appendChild(item);
                i++;
            })
        }
    }
    addOsagoDriver();

    function openDocument() {
        document.querySelectorAll('.documents__hover img').forEach(item => {
            item.addEventListener('click', function() {
                console.log(this.parentElement.parentElement.querySelector('img').src)
                document.querySelector('.modal__block img').src = this.parentElement.parentElement.querySelector('img').src
                document.querySelector('.modal').classList.add('modal__show')
            })
            document.querySelector('.modal').addEventListener('click', (item) => {
                if (item.target.classList.contains('modal__block')) {
                    document.querySelector('.modal').classList.remove('modal__show')
                }
            })
            document.querySelector('.modal__close').addEventListener('click', (item) => {
                document.querySelector('.modal').classList.remove('modal__show')
            })
        })
    }
    openDocument();

     
    $(document).ready(function(){
        $(".header__scroll").on("click","a", function (event) {
            //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();

            //забираем идентификатор бока с атрибута href
            var id  = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = $(id).offset().top;
            if (document.querySelector('.header__mobile')) {
                document.querySelector('.header__nav').style.left = "-100%"
                document.body.style.overflow = "auto"
            }
            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });

    $(function(){
        $("input[name='phone']").mask("+7999999999");
    });
});