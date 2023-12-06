const aboutText = document.querySelectorAll('.about-text')[0]
const aboutPicture = document.querySelectorAll('.about-picture')[0]

function showContent(element) {
    element.classList.add('content-show')
}

function hideContentLeft(element) {
    element.classList.add('content-hide-left')
}

function hideContentRight(element) {
    element.classList.add('content-hide-right')
}

// Show about content when the dom content is loaded
document.addEventListener('DOMContentLoaded', function () {
    showContent(aboutText)
    showContent(aboutPicture)
})

// Switch content when user click on list items
const navbarEle = document.querySelectorAll('.switch-content')
var oldContentShowed = document.getElementById('about')

navbarEle.forEach(function (element) {
    element.addEventListener('click', function () {
        // Get id by href
        var hrefName = element.getAttribute('href').substring(1)

        // Hide 'about' content displayed
        if (oldContentShowed.id == 'about') {
            hideContentLeft(aboutText)
            hideContentRight(aboutPicture)
            // Wait the end of the animation to hide 'about' content section
            setTimeout(function () {
                oldContentShowed.style.display = 'none'
            }, 1200)

            // Wait the end of the animation + 0.1 seconde to show new content section
            setTimeout(function () {
                // Show new content
                document.getElementById(hrefName).style.display = 'flex'
                // Set the new content as old content for next switch
                oldContentShowed = document.getElementById(hrefName)
            }, 1200)
        }
    })
})