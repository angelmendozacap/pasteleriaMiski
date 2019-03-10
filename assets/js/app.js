;
((d,c) => {
    
    const loadItems = async () => {
        const response = await fetch("./app.php")
        const data = await response.json()
        c(data)
    }
    loadItems()
})(document,console.log)