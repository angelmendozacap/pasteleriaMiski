;
((d,c,w) => {
    const toggle = d.getElementById('toggle'),
        navbar = d.getElementById('navbar'),
        header = d.getElementById('header')
    
    toggle.addEventListener('click' , e => {
        toggle.classList.toggle('toggle')
        navbar.classList.toggle('show-nav')
    })
    navbar.addEventListener('click', e => {
        if (e.target.matches('a[href*="#"]')) {
            navbar.classList.remove('show-nav')
            toggle.classList.remove('toggle')
        }
    })
    w.addEventListener('scroll', () => {
        if (pageYOffset > 300) {
            header.classList.add('back')
        } else {
            header.classList.remove('back')
        }
    })
    /*
    const loadItems = async () => {
        const response = await fetch("./app.php")
        const data = await response.json()
        c(data)
    }
    loadItems()
    */
})(document,console.log,window)