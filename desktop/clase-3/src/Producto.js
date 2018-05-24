import React, { Component } from 'react';
import PropTypes from 'prop-types';

class Producto extends Component {
  render() {
    return (
      <div>
        <h1>{this.props.titulo}</h1>
        {this.props.relacionados.map((relacionado, i) => {
          //return <div key={i}>{'El ítem ' + (i+1) + ' es ' + relacionado.nombre}</div>
          return <div key={i}>{`El ítem ${i+1} es ${relacionado.nombre}`}</div>
        })}
      </div>
    )
  }
}

Producto.propTypes = {
  titulo: PropTypes.oneOfType([
    PropTypes.string,
    PropTypes.number,
  ]).isRequired,
  relacionados: PropTypes.arrayOf(
    PropTypes.shape({
      nombre: PropTypes.string.isRequired,
      precio: PropTypes.string.isRequired
    })
  ).isRequired,
};

Producto.defaultProps = {
  titulo: 'No tengo título',
};

export default Producto
