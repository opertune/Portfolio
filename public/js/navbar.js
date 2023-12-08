const checkbox = document.getElementById('hamburger-checkbox')
const navbar = document.querySelectorAll('.collapse')

// Hide/Show navbar when user click on hamburger menu
checkbox.addEventListener('click', function () {
    if (checkbox.checked) {
        navbar.forEach(function (ele) {
            ele.classList.add('show')
            ele.classList.remove('hide')
        })

    } else {
        navbar.forEach(function (ele) {
            ele.classList.add('hide')
            ele.classList.remove('show')
        })
    }
})


// Hide navbar when user click on list items | Show bottom border when user click on list items (>800px)
const clickList = document.querySelectorAll('.nav-list')
var oldClick = null
clickList.forEach(function (element) {
    element.addEventListener('click', function () {
        // if screen width is less than 800px show/hide dropdown menu else show active border on the clicked element
        if (window.innerWidth <= 800) {
            navbar.forEach(function (ele) {
                ele.classList.add('hide')
                ele.classList.remove('show')
            })
            checkbox.checked = false
        } else {
            // Added bottom border exept for contacts
            if (!element.classList.contains('click-contact')) {
                element.classList.add('active')
            }
            // remove bottom border on change
            if (oldClick !== null && oldClick !== element) {
                oldClick.classList.remove('active')
            }
            oldClick = element
        }
    })
});

// Home button animation when the dom content is loaded
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.home-button')[0].style.transform = 'translateX(0)'
})