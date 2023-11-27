const checkbox = document.getElementById("hamburger-checkbox")
// const navbar = document.getElementsByClassName("navbar")[0]
checkbox.addEventListener("click", function () {
    if (checkbox.checked) {
        // navbar.style.transform = "translateY(0%)"
    } else {
        // navbar.style.transform = "translateY(-150%)"
    }
})

document.getElementById("mailto").addEventListener("click", function () {
    window.open('mailto:address@mail.com?subject=sub&body=this is body')
})