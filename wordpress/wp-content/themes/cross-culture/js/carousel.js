$(function() {
    carousel();
});

function carousel() {
    var carousel = document.querySelector('.carousel_imgs');
    // console.log(carousel);
    var indexLiArr = document.querySelectorAll('.carousel_index li');
    var width = document.querySelector('.carouselSm').offsetWidth;
    var imgNum = 7;

    transitionOn();
    var index = 1;
    // automatically scroll
    initTimer();

    carousel.addEventListener('webkitTransitionEnd', function() {
        if (index > imgNum - 2) {
            index = 1;
            transitionOff();
            transform();
        } else if (index < 1) {
            index = imgNum - 2;
            transitionOff();
            transform();
        }
        // change the style of index indicator
        for (var i = 0; i < indexLiArr.length; i++) {
            indexLiArr[i].classList.remove('current');
        }
        indexLiArr[index - 1].classList.add('current');

    })

    // swipe
    var startX = 0;
    var moveX = 0;

    carousel.addEventListener('touchstart', function(event) {
        clearInterval(timer);
        transitionOff();
        startX = event.touches[0].clientX;
    });

    carousel.addEventListener('touchmove', function(event) {
        moveX = event.touches[0].clientX - startX;
        carousel.style.transform = 'translateX(' + (moveX - index * width) + 'px)';
    })

    carousel.addEventListener('touchend', function(event) {
        transitionOn();

        if (Math.abs(moveX) < (width / 2)) {
            transform();
        } else {
            if (moveX > 0) {
                index--;
            } else {
                index++;
            }
            transform();
        }
        initTimer();
    })

    function transitionOn() {
        carousel.style.transition = 'all 0.3s';
    }

    function transitionOff() {
        carousel.style.transition = '';
    }

    function transform() {
        carousel.style.transform = 'translateX(-' + index * width + 'px)';
    }

    function initTimer() {
        timer = setInterval(function() {
            index++;
            transitionOn();
            transform();
        }, 2000);
    }
}
