import React, {Component} from 'react';
import './app.css'
import TheMovieDbApi from './clase-5/teoria/TheMovieDbApi'


// if (storage.getItem('request_token')) {
//   storage.removeItem('request_token');
//   axios.get(`https://api.themoviedb.org/3/authentication/token/new?api_key=${API_KEY}`).then(res => {
//     window.location.href = `https://www.themoviedb.org/authenticate/${res.data.request_token}`
//   });
// }
// axios.get(`https://api.themoviedb.org/3/authentication/session/new?api_key=${API_KEY}`).then(res => {
//   console.log(res)
// });

class App extends Component {
  constructor() {
    super();
    this.state = {
      loading: true,
      items: [],
      error: null
    };
    this.api = new TheMovieDbApi()
  }

  componentDidMount() {
    this.setState({
      loading: true,
      error: null
    });
    this.api.getPopularMovies().then(res => {
      this.setState({
        loading: false,
        error: null,
        items: res.data.results
      });
    }).catch((error) => {
      this.setState({
        loading: false,
        error: error,
        items: []
      });
    })
  }

  render() {
    return (
      <div>
        {this.state.loading && <div>Loading...</div>}
        {this.state.error && <div>{this.state.error}</div>}
        {!!this.state.items.length && <div>Muestro los items...</div>}
      </div>
    )
  }
}


export default App;
