import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import './promises';
import './axios';
import Producto from './Producto';

const productos = [
  {titulo: "Prod1"},
  {titulo: "Prod2"},
]

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code> and save to reload.
        </p>
        {productos.map(producto => {
          <Producto titulo={producto.titulo} relacionados={[
            {nombre: 'nombre', precio: 'una banda'},
            {nombre: 'otro', precio: 'un poco menos'}
           ]}/>

        })}
      </div>
    );
  }
}

export default App;
