import React, {Component} from 'react';
import logo from './logo.svg';
import './App.css';
import { Switch, Route, Link, withRouter } from 'react-router-dom';
import Header from './HeaderPeliculas'
import Detalle from './DetallePelicula'
import Error404 from './Error404'

class App extends Component {
    componentDidMount() {
      const { history } = this.props

      setTimeout(() => {
        history.push('/peliculas')
      }, 7000)
    }

    render() {
        return (
            <div className="App">
                <header className="App-header">
                    <img src={logo} className="App-logo" alt="logo"/>
                    <h1 className="App-title">Welcome to React</h1>
                </header>
                <ul>
                  <li><Link to="/peliculas">Películas</Link></li>
                  <li><Link to="/peliculas/volver-al-futuro/12876">Volver al Futuro</Link></li>
                </ul>
                <Switch>
                  <Route path="/peliculas/:slug/:id" component={Detalle}/>
                  <Route path="/peliculas" render={() => <Header param1="valor" />}/>
                  <Route component={Error404} />
                </Switch>
            </div>
        );
    }
}

  export default withRouter(App);
