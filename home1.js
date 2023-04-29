const tabs = document.querySelectorAll('[data-tab-name]')
const tabInfos = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabName); //elementi targert duhet me u shfaq kur tabi klikohet 

tabInfos.forEach(tabInfo => {
            tabInfo.classList.remove('active') //removes active class from all elements 
        })
        target.classList.add('active'); // to add the active class to the target element that was selected earlier, 
        // makes the target element visible and the others invisible
       
    })
})