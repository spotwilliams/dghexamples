import axios from 'axios';

// repasar return y saltos de línea
// crear un componente y renderearlo dentro de un map

// Creando una Promise con un Timeout
const listItems = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => reject('Error consultando la base de datos'), 2000);
  })
}

// Lo ejecuto de manera fluent utilizando then y catch
listItems().then((res) => {
  console.log(res)
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

axios.get('https://pokeapi.co/api/v2/pokemon/pikachu/').then(response => {
  console.log(response.data.sprites)
})
