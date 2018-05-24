import axios from 'axios'

const API_KEY = '317d8fc3dca92b6afbcf698c2d2e1aec';

class TheMovieDbApi {
  constructor() {
    this.axios = axios.create({
      baseURL: 'https://api.themoviedb.org/3',
      params: {
        api_key: API_KEY,
        language: 'es-AR',
      },
    })
  }

  getPopularMovies = (page = 1) => (
    this.axios.get(`/movie/popular`, {
      params: {page}
    })
  );

  getPopularSeries = (page = 1) => (
    this.axios.get(`/tv/popular`, {
        params: {page}
      }
    )
  );

  getMovieGenres = () => this.axios.get(`/genre/movie/list`);

  getTvGenres = () => this.axios.get(`/genre/tv/list`);

  getMovieByGenre = (genreId) => this.axios.get(`/discover/movie`, {
    params: {
      with_genres: genreId
    }
  });

  getTvByGenre = (genreId) => this.axios.get(`/discover/tv`, {
    params: {
      with_genres: genreId
    }
  });

  getTv = (tvId) => this.axios.get(`/tv/${tvId}`);

  getMovie = (movieId) => this.axios.get(`/movie/${movieId}`);
}

export default TheMovieDbApi
