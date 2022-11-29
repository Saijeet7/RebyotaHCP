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

});