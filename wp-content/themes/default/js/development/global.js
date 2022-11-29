$(function() {
    const tabs = document.querySelectorAll('[data-tab-target]');
    const tabContents = document.querySelectorAll('[data-tab-content]');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.tabTarget);
            tabContents.forEach(tabContent => tabContent.classList.remove('active'))
            tabs.forEach(tab => tab.classList.remove('tab__active'))
            tab.classList.add('tab__active')
            target.classList.add('active')
        })
    })

    $('.textAccordion__toggle').on('click', function() {
        var _this = $(this),
            headingParent = _this.closest('.textAcoordion__top'),
            accordionBody = headingParent.siblings('.textAccordion__body'),
            mainParent = _this.parents('.textAccordion__accordion'),
            isActive = mainParent.hasClass('is-active');

        if (isActive) {
            accordionBody.slideUp('fast');
            mainParent.removeClass('is-active');
            _this.html('+')
        } else {
            accordionBody.slideDown('fast');
            mainParent.addClass('is-active');
            _this.html('-')
        }

    })

});