function closeModal(modal, itemSelected) {
    modal.style.display = "none"
    itemSelected.style = "opacity: 0;"
    itemSelected.style.display = "none"
    document.querySelector('body').style = "overflow-y: scroll;"
}

// Show modal and modal content when user click on grid item in projects-grid
const modal = document.getElementsByClassName("modal")[0]
const gridItem = document.getElementsByClassName("grid-item")

for (let index = 0; index < gridItem.length; index++) {
    gridItem[index].addEventListener("click", function () {
        modal.style.display = "block"
        document.querySelector('body').style = "overflow-y: hidden;"
        var itemSelected = document.getElementsByClassName(this.id)[0]

        // Show modal content with opacity effect
        itemSelected.style.display = "block"
        setTimeout(function () {
            itemSelected.style.opacity = "1"
        }, 100)

        // Close modal when user click on cross
        document.getElementsByClassName('closeModal')[index].addEventListener("click", function () {
            closeModal(modal, itemSelected)
        })

        // close modal when user click outside modal content
        window.onclick = function (event) {
            if (event.target == modal) {
                closeModal(modal, itemSelected)
            }
        }
    })
}