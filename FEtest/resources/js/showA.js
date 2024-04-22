document.addEventListener('DOMcontentLoaded', function () {

    const tabs = document.getElementsByClassName('tab_name');

    for (let i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener('click', tabsSwitch, false);
    }


    function tabSwitch() {
        document.getElementsByClassNmae('is-active')[0].classList.remove('is-active');

        this.classList.add('is-active');

        document.getElementsByClassName('is-show')[0].classList.remove('is-show');

        const arrayTabs = Array.prototype.slice.call(tabs);

        const index = arrayTabs.indexOf(this);

        document.getElementsByClassNmae('tab_content')[index].classList.add('is-show');
    };

}, false);


