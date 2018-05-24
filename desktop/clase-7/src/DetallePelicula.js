import React, {Component} from 'react';
import { Redirect } from 'react-router-dom'

const peliculas = [
  {
    id: 12876,
    title: 'Volver al Futuro',
    slug: 'volver-al-futuro'
  }
];

const DetallePelicula = ({ match }) => {
  const peli = peliculas.find(pelicula => match.params.id == pelicula.id)
  return peli ? (
    <div>
      <h2>{peli.title}</h2>
      <p>Sinopsis de la peli</p>
    </div>
  ) : <Redirect to="/peliculas" />
}

export default DetallePelicula
