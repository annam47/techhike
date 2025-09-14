let list_icon = document.querySelector('.list-icon')
let sidebar = document.querySelector('.sidebar')
let underlay = document.querySelector('.underlay')


list_icon.addEventListener('click', () => {
    underlay.style.visibility = 'visible'
    sidebar.style.transform = 'translateX(0)'
})

underlay.addEventListener('click', () => {
    sidebar.style.transform = 'translateX(-100%)'
    underlay.style.visibility = 'hidden'
})
document.querySelector('.close-sidebar').addEventListener('click', () => {
    sidebar.style.transform = 'translateX(-100%)'
    underlay.style.visibility = 'hidden'
})

sidebar.addEventListener('click', (e) => {
    e.stopPropagation()
})