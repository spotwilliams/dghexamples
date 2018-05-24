import React, { Component } from 'react';
import MyInput from './MyInput';
import MyButton from './MyButton';
import MyItems from './MyItems';
import MyTotal from './MyTotal';

const MAX_CHARACTERS = 100;

class Ejercicio extends Component {
  constructor() {
    super();
    this.state = {
      items: [],
      inputValue: ''
    }
  }

  handleOnChangeInput = e => {
    // Validamos que no haya pasado el total de caracteres permitidos
    if (e.target.value.length > MAX_CHARACTERS) {
      alert(`El máximo de caracteres es de ${MAX_CHARACTERS}`)
    } else {
      this.setState({
        inputValue: e.target.value
      })
    }
  };

  addItem() {
    // Validamos que no exista el ítem
    if (state.items.indexOf(state.inputValue) === -1) {
      this.setState({
        state: this.state.items.push(state.inputValue),// Agrego el item al array
        inputValue: ''// Vacío el input
      })
    }
  }

  handleOnKeyPressInput = e => {
    if (e.which === 13 || e.keyCode === 13) {
      e.preventDefault()
      this.addItem()
    }
  };

  handleOnClickAdd = () => {
    this.addItem()
  };

  handleOnClickClear = () => {
    if (window.confirm('¿Está seguro de vaciar la lista?')) {
      this.setState({
        items: [],
        inputValue: ''
      })
    }
  };

  render() {
    return (
      <div>
        <MyInput value={this.state.inputValue} onChange={this.handleOnChangeInput} onKeyPress={this.handleOnKeyPressInput} />
        {MAX_CHARACTERS - this.state.inputValue.length}
        <MyButton title="Agregar" onClick={this.handleOnClickAdd} />
        <MyButton title="Vaciar" onClick={this.handleOnClickClear} />
        <MyTotal itemsCount={this.state.items.length} />
        <MyItems items={this.state.items} />
      </div>
    )
  }
}

export default Ejercicio;
