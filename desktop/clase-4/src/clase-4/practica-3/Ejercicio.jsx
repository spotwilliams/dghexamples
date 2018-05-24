import React, { Component } from 'react';
import axios from 'axios'
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
      inputValue: '',
      loading: false,
      imgPokemon: null
    }
  }

  componentWillMount() {
    console.log('MyPokemons será montado')
  }

  componentDidMount() {
    console.log('MyPokemons fue montado')
  }

  componentWillUpdate(nextProps, nextState) {
    console.log(nextState);
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
    const items = this.state.items;
    // Validamos que no exista el ítem
    if (items.indexOf(this.state.inputValue) === -1) {
      items.push(this.state.inputValue); // Agrego el item al array
      this.setState({
        items: items,
        inputValue: '' // Vacío el input
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

  handleOnClickItem = pokemon => {
    this.setState({loading: true});
    axios.get(`https://pokeapi.co/api/v2/pokemon/${pokemon}`).then(res => {
      console.log(res)
      this.setState({
        loading: false,
        imgPokemon: res.data.sprites.front_default
      });
    }).catch(error => {
      this.setState({
        loading: false,
        imgPokemon: null
      });
    })
  };

  render() {
    return (
      <div>
        <MyInput value={this.state.inputValue} onChange={this.handleOnChangeInput} onKeyPress={this.handleOnKeyPressInput} />
        {MAX_CHARACTERS - this.state.inputValue.length}
        <MyButton title="Agregar" onClick={this.handleOnClickAdd} />
        <MyButton title="Vaciar" onClick={this.handleOnClickClear} />
        <MyTotal itemsCount={this.state.items.length} />
        <MyItems items={this.state.items} onClickItem={this.handleOnClickItem} />
        {this.state.loading
          ? <div>Buscando pokemon...</div>
          : (this.state.imgPokemon && <img src={this.state.imgPokemon} alt=""/>)
        }
      </div>
    )
  }
}

export default Ejercicio;
