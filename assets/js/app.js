;
((d,c) => {
    const toggle = d.getElementById('toggle'),
        navbar = d.getElementById('navbar')
    
    toggle.addEventListener('click' , e => {
        toggle.classList.toggle('toggle')
        navbar.classList.toggle('show-nav')
    })
    /*
    const loadItems = async () => {
        const response = await fetch("./app.php")
        const data = await response.json()
        c(data)
    }
    loadItems()
    */
})(document,console.log)