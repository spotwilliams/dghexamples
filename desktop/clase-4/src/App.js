import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Ejercicio from './clase-4/practica-1/Ejercicio'
import Like from './Like'

class App extends Component {
  constructor() {
    super()
    this.state = {
      likeIsVisible: true
    }
  }

  componentDidMount() {
    setTimeout(() => {
      this.setState({likeIsVisible: false})
    }, 5000)
  }

  render() {
    const { likeIsVisible } = this.state

    return likeIsVisible && <Like />;
  }
}

export default App;
