import React, { Component } from 'react';
import TheMovieDbApi from '../teoria/TheMovieDbApi';

const TYPE_TV = 'tv';
const TYPE_MOVIE = 'movie';

class MyMoviesSeries extends Component {
  constructor() {
    super();
    this.state = {
      loading: false,
      selectedType: null,
      genres: [],
      selectedGenre: null,
      items: [],
      selectedItem: null,
    };

    this.api = new TheMovieDbApi();
  }

  handleOnChangeType = (event) => {
    this.setState({
      loading: true,
      selectedType: event.target.value,
      genres: [],
      selectedGenre: null,
      items: [],
      selectedItem: null,
    });

    switch (event.target.value) {
      case TYPE_MOVIE:
        this.api.getMovieGenres().then(res => {
          this.setState({
            loading: false,
            genres: res.data.genres
          });
          console.log(res.data.genres)
        });
        break;
      case TYPE_TV:
        this.api.getTvGenres().then(res => {
          this.setState({
            loading: false,
            genres: res.data.genres
          });
        });
        break;
      default:
        // Si es vacío no hacemos nada
    }
  };

  handleOnChangeGenre = (event) => {
    this.setState({
      loading: true,
      selectedGenre: event.target.value,
      items: [],
      selectedItem: null,
    });

    switch (this.state.selectedType) {
      case TYPE_MOVIE:
        this.api.getMovieByGenre(event.target.value).then(res => {
          this.setState({
            loading: false,
            items: res.data.results
          });
          console.log(res.data.results)
        });
        break;
      case TYPE_TV:
        this.api.getTvByGenre(event.target.value).then(res => {
          this.setState({
            loading: false,
            items: res.data.results
          });
          console.log(res.data.results)
        });
        break;
      default:
        // Si es vacío no hacemos nada
    }
  };

  handleOnChangeItem = (event) => {
    this.setState({
      loading: true,
      selectedItem: event.target.value,
    });

    switch (this.state.selectedType) {
      case TYPE_MOVIE:
        this.api.getMovie(event.target.value).then(res => {
          this.setState({
            loading: false,
          });
          console.log(res.data)
        });
        break;
      case TYPE_TV:
        this.api.getTv(event.target.value).then(res => {
          this.setState({
            loading: false,
          });
          console.log(res.data)
        });
        break;
      default:
        // Si es vacío no hacemos nada
    }
  };

  render() {
    const { loading, selectedType, genres, selectedGenre, items, selectedItem } = this.state;

    return (
      <div>
        <div>
          <select onChange={this.handleOnChangeType} defaultValue={selectedType}>
            <option value="">-- Seleccione --</option>
            <option value={TYPE_TV}>Series</option>
            <option value={TYPE_MOVIE}>Películas</option>
          </select>
        </div>
        {!!genres.length && (
          <div>
            <select onChange={this.handleOnChangeGenre} defaultValue={selectedGenre}>
              <option value="">-- Seleccione --</option>
              {genres.map(({ id, name }) => (
                <option value={id} key={id}>{name}</option>
              ))}
            </select>
          </div>
        )}
        {!!items.length && (
          <div>
            <select onChange={this.handleOnChangeItem} defaultValue={selectedItem}>
              <option value="">-- Seleccione --</option>
              {items.map(({ id, title, name }) => (
                <option value={id} key={id}>{title || name}</option>
              ))}
            </select>
          </div>
        )}
        {loading && <div>Loading...</div>}
      </div>
    )
  }
}

export default MyMoviesSeries;
