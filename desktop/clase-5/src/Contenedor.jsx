import React from 'react';

const Contenedor = ({ children, title }) => (
  <div className="container">
    <h1>{title}</h1>
    <div className="container-body">{children}</div>
  </div>
)

export default Contenedor;
