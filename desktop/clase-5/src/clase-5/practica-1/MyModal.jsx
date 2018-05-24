import React, { Component } from 'react';
import Modal, { ModalHeader, ModalBody, ModalFooter } from './Modal';

class MyModal extends Component {
  constructor() {
    super();
    this.state = {
      visible: true
    }
  }

  handleOnClickClose = () => {
    this.setState({
      visible: false
    });
  };

  render() {
    return (
      <Modal visible={this.state.visible}>
        <ModalHeader onClickClose={this.handleOnClickClose}>Titulo de mi modal</ModalHeader>
        <ModalBody>Cuerpo de mi modal</ModalBody>
        <ModalFooter>footer de mi modal</ModalFooter>
      </Modal>
    )
  }
}

export default MyModal;
