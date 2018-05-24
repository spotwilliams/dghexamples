import React, { Component } from 'react';

const MAX_CHARACTERS = 100

class Ejercicio extends Component {
  constructor() {
    super()
    this.state = {
      items: [],
      inputValue: '',
    }
  }

  handleOnChangeInput = e => {
    // Prevenimos el default del input ya que nosotros manejaremos el estado
    e.preventDefault()

    // Validamos que no haya pasado el total de caracteres permitidos
    if (e.target.value.length > MAX_CHARACTERS) {
      alert(`El máximo de caracteres es de ${MAX_CHARACTERS}`)
    } else {
      this.setState({
        inputValue: e.target.value
      })
    }
  }

  handleOnClickAdd = () => {
    this.setState(state => {
      // Validamos que no exista el ítem
      if (state.items.indexOf(state.inputValue) === -1) {
        // Agrego el item al array
        state.items.push(state.inputValue)
        // Vacío el input
        state.inputValue = ''
      }

      return state
    })
  }

  handleOnClickClear = () => {
    if (window.confirm('¿Está seguro de vaciar la lista?')) {
      this.setState({
        items: [],
        inputValue: ''
      })
    }
  }

  render() {
    return (
      <div style={{ padding: '10px'}}>
        <input value={this.state.inputValue} onChange={this.handleOnChangeInput} />
        {MAX_CHARACTERS - this.state.inputValue.length}
        <button onClick={this.handleOnClickAdd}>Agregar</button>
        <button onClick={this.handleOnClickClear}>Vaciar</button>
        {!!this.state.items.length && (
          <p>{ `${this.state.items.length} items en total` }</p>
        )}
        <ul>
          { this.state.items.map((item, i) => (
              <li key={item}>{`${i + 1} - ${item}`}</li>
          )) }
        </ul>
      </div>
    )
  }
}

export default Ejercicio;
