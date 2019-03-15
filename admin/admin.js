;
((d,c) => {

    const form = d.forms[0],
        adminCards = d.getElementById('Cards'),
        alerta = d.getElementById('aviso')

    form.addEventListener('submit', e => {
        e.preventDefault()
        let data = new FormData(e.target)
        uploadImage(data)
    })
    const uploadImage = data => {

        const options = {
            method: 'POST',
            body: data
        }

        fetch('../app.php',options)
            .then(res => {
                return (res.ok)
                    ? res.json()
                    : Promise.reject({ status: res.status, statusText: res.statusText })
            })
            .then( data => {
                c(data)
                if (data.code == 201) {
                    alerta.innerHTML = `
                    <div class="alert alert-success">
                        ${data.message}
                    </div>
                    `
                    form.reset()
                    window.location.reload()
                } else {
                    alerta.innerHTML = `
                    <div class="alert alert-danger">
                        ${data.message}
                    </div>
                    `
                    form.reset()
                }
            })
            .catch( err => c(err.message))
    }

    const loadItems = () => {
        fetch("../app.php")
            .then(res => {
                return (res.ok)
                    ? res.json()
                    : Promise.reject({ status: res.status, statusText: res.statusText })
            })
            .then(data => {
                showItems(data.items)
            })
            .catch(err => {
                c("Hubo un error en la petición: " + err)
            })
    }
    const showItems = data => {
        data.forEach(item => {
            let card = d.createElement('div')
            card.id = item.id
            card.className = "card px-0 col-12 col-md-6 col-lg-4"
            card.innerHTML = templateCard(item)
            adminCards.insertAdjacentElement('afterbegin', card)
        });
    }
    const templateCard = ({ image, name }) => {
        const PATH = '../pictures/'
        return `
            <img src="${PATH}${image}" class="card-img-top" style="object-fit: cover;" alt="${name}">
            <div class="card-body">
                <h5 class="text-center card-title">${name}</h5>
            </div>
        `
    }

    loadItems()

})(document,console.log)