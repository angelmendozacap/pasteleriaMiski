;
((d,c,w) => {
    const toggle = d.getElementById('toggle'),
        navbar = d.getElementById('navbar'),
        header = d.getElementById('header'),
        photoCards = d.getElementById('Photos')
    
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
    
    const loadItems = () => {
        fetch("./app.php")
        .then( res => {
            return (res.ok)
            ? res.json()
            : Promise.reject({status: res.status,statusText: res.statusText})
        })
        .then( data => {
            showItems(data.items)
        })
        .catch( err => {
            c("Hubo un error en la petición: "+err)
        })
    }
    const showItems = data => {
        data.forEach(item => {
            let card = d.createElement('div')
            card.id = item.id
            card.className = "photos_card"
            card.innerHTML = templateCard(item)
            photoCards.insertAdjacentElement('afterbegin',card)
        });
    }
    const templateCard = ({image,name}) => {
        const PATH = './pictures/'
        return `
            <div>
                <img src="${PATH}${image}" alt="${name}">
            </div>
            <h3>${name}</h3>
        `
    }

    loadItems()
   
})(document,console.log,window)