import axios from 'axios'

// Ejemplo llamado GET
axios.get('https://pokeapi.co/api/v2/pokemon/charmander').then(response => {
  console.log(response)

  axios
    .get('https://pokeapi.co/api/v2/pokemon/' + (response.data.id + 1))
    .then(response2 => {
      console.log(response2)
    })
})

// Ejemplo llamado POST
// axios.post('https://pokeapi.co/api/v2/pokemon/charmander', {
//   param1: 'primero',
//   param2: 'segundo',
// }).then(response => {
//   console.log(response)
// })
