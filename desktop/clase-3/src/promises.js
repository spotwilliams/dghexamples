
// Creando una Promise con un Timeout
const listItems = () => {
  return new Promise((resolve, reject) => {
    const items = [1, 2, 3]
    setTimeout(() => resolve(items), 2000);
  })
}

const listMoreItems = (itemsAnteriores) => {
  return new Promise((resolve, reject) => {
    const nuevosItems = [4, 5, 6]
    console.log(itemsAnteriores)
    const items = [...itemsAnteriores, ...nuevosItems]
    setTimeout(() => resolve(items), 2000);
  })
}


// Lo ejecuto de manera fluent utilizando then y catch
listItems()
.then(listMoreItems)
.then((items) => {
  console.log(items)
}).catch(error => {
  console.log(error)
})

// Lo ejecuto usando async y await
async function pruebaAsyncAwait() {
  try {
    const items = await listItems();
    console.log(items)
  } catch(e) {
    console.log(e)
  }
}
pruebaAsyncAwait()
