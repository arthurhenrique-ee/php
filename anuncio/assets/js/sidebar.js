let sidebar = document.querySelector('.sidebar')
let btnSidebar = document.querySelector('.sidebar-btn')
let body = document.querySelector('body')

btnSidebar.addEventListener("click", () => {
    body.classList.toggle("sidebar-active")
    sidebar.classList.toggle("active")
})