// Each parent div
const aboutParent = document.getElementById('about')
const projectsParent = document.getElementById('projects')
const skillsParent = document.getElementById('skills')
const contactParent = document.getElementById('contact')

// Show / Hide children function
function showChildren(element) {
    // transformX 0
    element.classList.add('content-show')
}

function hideChildren(element) {
    element.classList.remove('content-show')
}

// Show / Hide parent
function showParent(element) {
    element.style.display = 'block'
}

function hideParent(element) {
    setTimeout(() => { element.style.display = 'none' }, 500)
}

// Show about
function about(bool) {
    if (bool) {
        setTimeout(() => {
            showParent(aboutParent)
            setTimeout(() => {
                for (let index = 0; index < aboutParent.children.length; index++) {
                    showChildren(aboutParent.children[index])
                }
            }, 50)
        }, 700)
    } else {
        hideChildren(aboutParent.children[0])
        hideChildren(aboutParent.children[1])
        hideParent(aboutParent)
    }
}

// Show / Hide projects
function projects(bool) {
    const gridItemAnimation = document.querySelectorAll('.grid-item')
    if (bool) {
        setTimeout(() => {
            showParent(projectsParent)
            setTimeout(() => {
                document.querySelectorAll('.projects-title')[0].classList.add('content-show')
                gridItemAnimation.forEach(element => {
                    showChildren(element)
                });
            }, 50)
        }, 700)
    } else {
        setTimeout(() => {
            document.querySelectorAll('.projects-title')[0].classList.remove('content-show')
            gridItemAnimation.forEach(element => {
                hideChildren(element)
            });
        }, 50)
        hideParent(projectsParent)
    }

}

// Show skills
// Skills progress bar
function progressBarAnimation(bool) {
    const level = [
        ['php', 60, "#787CB5"],
        ['html', 80, "#e34c26"],
        ['css', 50, "#264de4"],
        ['js', 30, "#f0db4f"],
        ['c++', 30, "#5C8DBC"],
        ['c#', 40, "#390091"],
        ['java', 50, "#ca3132"],
        ['lua', 30, "#00007D"],
        ['sql', 60, "#7EBB00"],
        ['symfony', 70, "#FFF"],
        ['bootstrap', 50, "#7952b3"],
        ['jquery', 20, "#21609B"],
        ['python', 30, "#FFE873"]
    ]
    const progressBar = document.querySelectorAll(".progressBar")
    for (let index = 0; index < progressBar.length; index++) {
        progressBar[index].style = "background-color: " + level[index][2] + ";"
        progressBar[index].style.width = "0%"
        setTimeout(() => {
            if (bool) {
                progressBar[index].style.width = level[index][1] + "%"
            } else {
                progressBar[index].style.width = 0 + "%"
            }
        })
    }
}
function skills(bool) {
    const list = document.querySelectorAll('.languages-list')[0].children
    if (bool) {
        setTimeout(() => {
            showParent(skillsParent)
            setTimeout(() => {
                document.querySelectorAll('.skills-title')[0].classList.add('content-show')
                document.querySelectorAll('.skills-description')[0].classList.add('content-show')
            }, 50)
            for (let index = 0; index < list.length; index++) {
                setTimeout(function () {
                    showChildren(list[index])
                }, 50 * index)
            }
            setTimeout(() => { progressBarAnimation(true) }, 1000)
        }, 700)
    } else {
        for (let index = 0; index < list.length; index++) {
            setTimeout(() => {
                document.querySelectorAll('.skills-title')[0].classList.remove('content-show')
                document.querySelectorAll('.skills-description')[0].classList.remove('content-show')
            }, 50)
            setTimeout(function () {
                hideChildren(list[index])
            }, 50 * index)
        }
        progressBarAnimation(false)
        hideParent(skillsParent)
    }

}

// Show / Hide contact
function contact(bool) {
    const contactFormChildren = document.getElementById('contactForm').children
    if (bool) {
        setTimeout(() => {
            showParent(contactParent)
            for (let index = 0; index < contactFormChildren.length; index++) {
                setTimeout(function () {
                    showChildren(contactFormChildren[index])
                }, 60 * index)
            }
        }, 700)
    } else {
        for (let index = 0; index < contactFormChildren.length; index++) {
            setTimeout(function () {
                hideChildren(contactFormChildren[index])
            }, 50 * index)
        }
        hideParent(contactParent)
    }
}


// Show about content when the dom content is loaded
document.addEventListener('DOMContentLoaded', function () {
    // Show contact form after submit
    if (sessionStorage.getItem('contact')) {
        about(false)
        contact(true)
        sessionStorage.clear()
    } else {
        about(true)
    }
})

// Switch content when user click on list items
const navbarEle = document.querySelectorAll('.switch-content')

navbarEle.forEach(function (element) {
    // click event on each element in navbar
    element.addEventListener('click', function () {
        // Get id by href
        var hrefName = element.getAttribute('href').substring(1)

        // Hide old content
        if (hrefName != 'about') {
            about(false)
        }
        if (hrefName != 'projects') {
            projects(false)
        }
        if (hrefName != 'skills') {
            skills(false)
        }
        if (hrefName != 'contact') {
            contact(false)
        }

        switch (hrefName) {
            case 'about': about(true)
                break
            case 'projects': projects(true)
                break
            case 'skills': skills(true)
                break
            case 'contact': contact(true)
                break
        }
    })
})