import React, { Component } from 'react';
import Alert from './Alert';

class Ejercicio extends Component {
  constructor() {
    super();
    this.state = {
      alerts: [
        {type: 'danger', content: 'Este es un alert de tipo danger'},
        {type: 'secondary', content: 'Este es un alert de tipo secondary'},
        {type: 'success', content: 'Este es un alert de tipo success'},
      ]
    }
  }

  handleOnClickAlert = (event, index) => {
    const { alerts } = this.state;
    alerts.splice(index, 1);
    this.setState({ alerts: alerts });
  };

  render() {
    return (
      <div className="container">
        {this.state.alerts.map(({ type, content }, index) => (
          <Alert
            key={content}
            type={type}
            onAny={(event) => this.handleOnClickAlert(event, index)}
          >
            {content}
          </Alert>
        ))}
        {!this.state.alerts.length && <div>No hay mensajes para mostrar</div>}
      </div>
    )
  }
}

export default Ejercicio;
