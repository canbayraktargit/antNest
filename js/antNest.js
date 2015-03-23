$(document).ready(function() {
    $('#fullpage').fullpage({
            //Navigation
            menu: '#navbar',
            anchors:['firstPage', 'secondPage', 'thirdPage'],
            navigation: false,
            navigationPosition: 'right',
            navigationTooltips: ['firstPage', 'secondPage', 'thirdPage'],
            showActiveTooltips: false,
            slidesNavigation: true,
            slidesNavPosition: 'bottom',

            //Scrolling
            css3: true,
            scrollingSpeed: 500,
            autoScrolling: true,
            fitToSection: true,
            scrollBar: false,
            easing: 'easeInOutCubic',
            easingcss3: 'ease',
            loopBottom: false,
            loopTop: false,
            loopHorizontal: true,
            continuousVertical: false,
            normalScrollElements: null,
            scrollOverflow: true,
            touchSensitivity: 1,
            normalScrollElementTouchThreshold: 5,

            //Accessibility
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,

            //Design
            controlArrows: true,
            verticalCentered: true,
            resize : false,
            sectionsColor : ['#add', '#ddd'],
            paddingTop: '40px',
            paddingBottom: '40px',
            fixedElements: '#navbar',
            responsive: 0,

            //Custom selectors
            sectionSelector: '.section',
            slideSelector: '.fpSlide'
    });
});